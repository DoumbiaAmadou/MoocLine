<?php

namespace moocline\ExoBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="QuestionRepository")
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
    * @ORM\ManyToOne(targetEntity="moocline\ExoBundle\Entity\Exercice",
    cascade={"persist"})
    */
    private $exercice;
	
     /**
     * @var string
     *
     * @ORM\Column(name="question", type="text")
     */
    private $question;

     /**
    * @ORM\OneToMany(targetEntity="Reponse",mappedBy="Question", cascade={"persist"})
    */
    private $reponses;


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

}
