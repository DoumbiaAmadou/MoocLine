<?php

namespace moocline\ExoBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Question
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="QuestionRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Question
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

	/**
    * @ORM\ManyToOne(targetEntity="moocline\ExoBundle\Entity\Exercice", cascade={"persist"})
    * @ORM\JoinColumn(name="exercice_id", referencedColumnName="id")
	*/
    private $exercice;
	
     /**
     * @var string
     *
     * @ORM\Column(name="question", type="text")
     */
    protected $question;

     /**
    * @ORM\OneToMany(targetEntity="Reponse",mappedBy="Question", cascade={"persist"})
    */
    protected $reponses;

	/**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;
	
	/**
     * @Assert\File(maxSize="6000000")
     */
    public $file;
    
    
    /**
     * @var float
     *
     * @ORM\Column(name="point", type="float", nullable=false)
     */
    public $point;
	
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reponses = new ArrayCollection();
    }

	/**
     * Set exercice
     *
     * @param Exercice $exercice
     * 
     */
    public function setExercice(Exercice $exercice)
    {
        $this->exercice = $exercice;
    }

    /**
     * Get exercice
     *
     * @return Exercice
     */
    public function getExercice()
    {
        return $this->exercice;
    }
	
	
    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }
	
    /**
     * Set question
     *
     *@param string $question
     */
    public function setQuestion($question){
        $this->question = $question;
    }

    /**
     * Get reponses
     *
     * @return ArrayCollection 
     */
    public function getReponses()
    {
        return $this->reponses;
    }

    /**
    *Set reponses
    *
    */

    public function setReponses(ArrayCollection $reponses)
    {
        foreach ($reponses as $reponse){
            $reponse->setQuestion($this);
        }
        $this->reponses = $reponses;
    }

    /**
     * Add reponse
     *
     * @param Reponse $reponse
     */
    public function addReponse(Reponse $reponse)
    {
        $reponse->setQuestion($this);
        $this->reponses->add($reponse);
    }


	/**
     * Get file
     *
     * @return File 
     */
    public function getFile()
    {
        return $this->file;
    }
	
    /**
     * Set file
     *
     *@param File $file
     */
    public function setFile($file){
        $this->file = $file;
    }
	

	
    /**
     * Remove reponse
     *
     * @param Reponse $reponse
     */
    public function removeReponse(Reponse $reponse)
    {
		$reponse->setQuestion(null);
        if($this->reponses->removeElement($reponse))
		return true;
		else return false;
    }
	
    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        return 'uploads/documents';
    }
	
	
	/**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->file) {
			//$this->path = $this->file->getClientOriginalName();
            $this->path = sha1(uniqid(mt_rand(), true)).'.'.$this->file->guessExtension();
			
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->file) {
            return;
        }

        // s'il y a une erreur lors du déplacement du fichier, une exception
        // va automatiquement être lancée par la méthode move(). Cela va empêcher
        // proprement l'entité d'être persistée dans la base de données si
        // erreur il y a
        $this->file->move($this->getUploadRootDir(), $this->path);

        unset($this->file);
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }
	
	
	
	/**
     * Get point
     *
     * @return float
     */
    public function getPoint()
    {
        return $this->point;
    }
	
	
    /**
     * set point
     *
	 * @param float $point
     */
    public function setPoint($point)
    {
        return $this->point = $point;
    }
	
	
	public function getNbGoodQuestion()
    {
       $i = 0 ; 
       foreach ($this->reponses as $value) {
          
          if( $value->getCorrect()==true) 
           $i++; 
       }
        return $i;
    }
    
	public function getNbBadQuestion()
    {
       $i = 0 ; 
       foreach ($this->reponses as $value) {
          
          if( $value->getCorrect()==false)
           $i++; 
       }
        return $i;
    }
}
