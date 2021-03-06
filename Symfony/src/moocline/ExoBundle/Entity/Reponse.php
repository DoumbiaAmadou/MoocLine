<?php

namespace moocline\ExoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="moocline\ExoBundle\Entity\ReponseRepository")
 */
class Reponse
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
     * @var boolean
     *
     * @ORM\Column(name="correct", type="boolean")
     */
    protected $correct;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse", type="text")
     */
    protected $reponse;
	
     /**
    * @ORM\ManyToOne(targetEntity="moocline\ExoBundle\Entity\Question", cascade={"persist"})
	* @ORM\JoinColumn(name="question_id", referencedColumnName="id")
    */
    private $question;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
	
	public function __toString()
    {
        return (string) $this->getReponse();
    }

    /**
     * Get correct
     *
     * @return boolean 
     */
    public function getCorrect()
    {
        return $this->correct;
    }
	
	/**
     * Set correct
     *
     * @param boolean $correct
     * @return Reponse
     */
    public function setCorrect($correct)
    {
        $this->correct = $correct;
    }
	
    /**
     * Get reponse
     *
     * @return string 
     */
    public function getReponse()
    {
        return $this->reponse;
    }
	
    /**
     * Set reponse
     *
     * @param string $reponse
     *
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;

    }
	
    /**
     * Set question
     *
     * @param Question $question
     * 
     */
    public function setQuestion(Question $question)
    {
        $this->question = $question;
    }

    /**
     * Get question
     *
     * @return Question
     */
    public function getQuestion()
    {
        return $this->question;
    }
}
