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
    protected $intitule;

	/**
	*@var string
	*
	*@ORM\Column(name="type", type="text")
	*/
	protected $type;
	
	/**
    * @ORM\ManyToOne(targetEntity="moocline\ExoBundle\Entity\FeuilleEx", cascade={"persist"})
	* @ORM\JoinColumn(name="feuilleEx_id", referencedColumnName="id")
    */
    private $feuilleEx;
	
    /**
    * @ORM\OneToMany(targetEntity="Question",mappedBy="Exercice", cascade={"persist"})
    */
    protected $questions;


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
		$mtype = $type;
        $this->type = $mtype;
    }

	/**
     * Get feuilleEx
     *
     * @return FeuilleEx
     */
    public function getFeuilleEx()
    {
        return $this->feuilleEx;
    }
	
	/**
     * Set feuilleEx
     *
     * @param FeuilleEx $feuilleEx
     * 
     */
    public function setFeuilleEx(FeuilleEx $feuilleEx)
    {
        $this->feuilleEx = $feuilleEx;
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
		$quest->setPoint($question->getPoint());
		$quest->setQuestion($question->getQuestion());
		$quest->setReponses($question->getReponses());
		$quest->setFile($question->getFile());
		if($this->type == "p"){	
			$quest->preUpload();
		}
		$this->questions->add($quest);
    }

	/**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
	 public function uploadFile(){
		if($this->type == "p"){
			if($this->questions[0] != null){
				$quest = $this->questions()[0];
				$quest->postUpload();
			}
		}
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
