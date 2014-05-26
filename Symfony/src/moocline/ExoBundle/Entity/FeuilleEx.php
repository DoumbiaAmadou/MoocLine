<?php

namespace moocline\ExoBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * FeuilleEx
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FeuilleExRepository")
 */
class FeuilleEx
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
	*@var string
	*
	*@ORM\Column(name="type", type="text")
	*/
	private $type;
	
     /**
     * @var string
     *
     * @ORM\Column(name="titre", type="text")
     */
    private $titre;
	
	 /**
    * @ORM\ManyToOne(targetEntity="moocline\CoursBundle\Entity\Chapitre", cascade={"persist"})
    */
    private $chapitre;
	
    /**
    * @ORM\OneToMany(targetEntity="Exercice",mappedBy="FeuilleEx", cascade={"persist"})
    */
    private $exercices;
    
    /**
    * @ORM\OneToMany(targetEntity="FeuilleExEtu",mappedBy="FeuilleEx", cascade={"persist"})
    */
    private $feuillesEtu;
	
	
    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean")
     */
    private $visible;
    

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
		
        $this->exercices = new ArrayCollection();
		$this->feuillesEtu = new ArrayCollection();
    }

	public function __toString()
    {
        return (string) $this->getTitre()." (".$this->getType().")";
    }
	
	/**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
	
    /**
     * Set type
     *
     *@param string $type
     */
    public function setType($type){
		$this->type = $type;
    }
		
    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }
	
    /**
     * Set titre
     *
     *@param string $titre
     */
    public function setTitre($titre){
		$this->titre = $titre;
    }

	
	
	
    /**
     * Get exercices
     *
     * @return ArrayCollection 
     */
    public function getExercices()
    {
        return $this->exercices;
    }

    /**
    *Set exercices
    *
    */

    public function setExercices(ArrayCollection $exercices)
    {
        foreach ($exercices as $exercice){
            $exercice->setFeuilleEx($this);
        }
        $this->exercices = $exercices;
    }

    /**
     * Add exercice
     *
     * @param Exercice $exercice
     */
    public function addExercice(Exercice $exercice)
    {
		$ex = new Exercice();
        $ex->setFeuilleEx($this);
		$ex->setIntitule($exercice->getIntitule());
		$ex->setType($exercice->getType());
		$ex->setQuestions($exercice->getQuestions());
        $this->exercices->add($ex);
    }
	
    /**
     * Remove exercice
     *
     * @param Exercice $exercice
     */
    public function removeExercice(Exercice $exercice)
    {
		$exercice->setFeuilleEx(null);
        if($this->exercices->removeElement($exercice))
		return true;
		else return false;
    }
	
	/**
     * Get feuillesEtu
     *
     * @return ArrayCollection 
     */
    public function getfeuillesEtu()
    {
        return $this->feuillesEtu;
    }

    /**
    *Set feuillesEtu
    *
    */
    public function setFeuillesEtu(ArrayCollection $feuillesEtu)
    {
        foreach ($feuillesEtu as $feuille){
            $feuille->setFeuilleRef($this);
        }
        $this->feuillesEtu = $feuillesEtu;
    }

    /**
     * Add feuilleEtu
     *
     * @param FeuilleExEtu $feuilleEtu
     */
    public function addFeuilleEtu(FeuilleExEtu $feuilleEtu)
    {
        $feuilleEtu->setFeuilleRef($this);
		$this->feuillesEtu->add($feuilleEtu);
    }
	
    /**
     * Remove feuilleEtu
     *
     * @param FeuilleExEtu $feuilleEtu
     */
    public function removeFeuilleEtu(FeuilleExEtu $feuilleEtu)
    {
		$feuilleEtu->setFeuilleRef(null);
        if($this->feuillesEtu->removeElement($feuilleEtu))
		return true;
		else return false;
    }

	/**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
	 public function upExFile()
	 {
		foreach ($this->getExercices() as $ex)
		{
			if($ex->getType=="p")
			{
				$ex->uploadFile();
			}
		}
	 }

    /**
     * Set chapitre
     *
     * @param \moocline\CoursBundle\Entity\Chapitre $chapitre
     * @return FeuilleEx
     */
    public function setChapitre(\moocline\CoursBundle\Entity\Chapitre $chapitre = null)
    {
        $this->chapitre = $chapitre;
    
        return $this;
    }

    /**
     * Get chapitre
     *
     * @return \moocline\CoursBundle\Entity\Chapitre 
     */
    public function getChapitre()
    {
        return $this->chapitre;
    }
	
	public function getTotalPoint() {
        $i = 0; 
        foreach($this->exercices as $exo)
            foreach ($exo->getQuestions() as  $question) {
                $i += $question->getPoint();
            }
        return $i ; 
     }
	 
    /**
     * Get visible
     *
     * @return boolean 
     */
    public function getVisible()
    {
        return $this->visible;
    }
	
    /**
     * Set visible
     *
     * @param boolean $visible
     * @return FeuilleEx
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;
    
        return $this;
    }
}
