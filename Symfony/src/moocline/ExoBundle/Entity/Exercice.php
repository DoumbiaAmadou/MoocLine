<?php

namespace moocline\ExoBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Exercice
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ExerciceRepository")
 */
class Exercice
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
     * @var string
     *
     * @ORM\Column(name="intitule", type="text")
     */
    private $intitule;

	/**
	*@var string
	*
	*@ORM\Column(name="type", type="text")
	*/
	private $type;
	
     /**
    * @ORM\OneToMany(targetEntity="Question",mappedBy="Exercice", cascade={"persist"})
    */
    private $questions;


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
        $this->questions = new ArrayCollection();
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
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }
	
    /**
     * Set intitule
     *
     *@param string $intitule
     */
    public function setIntitule($intitule){
		$this->intitule = $intitule;
    }

    /**
     * Get questions
     *
     * @return ArrayCollection 
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
    *Set questions
    *
    */

    public function setQuestions(ArrayCollection $questions)
    {
        foreach ($questions as $question){
            $question->setExercice($this);
        }
        $this->questions = $questions;
    }

    /**
     * Add question
     *
     * @param Question $question
     */
    public function addQuestion(Question $question)
    {
		$quest = new Question();
        $quest->setExercice($this);
		$quest->setQuestion($question->getQuestion());
		$quest->setReponses($question->getReponses());
        $this->questions->add($quest);
    }

    /**
     * Remove question
     *
     * @param Question $question
     */
    public function removeQuestion(Question $question)
    {
		$question->setExercice(null);
        if($this->questions->removeElement($question))
		return true;
		else return false;
    }

}
