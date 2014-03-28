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
    private $correct;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse", type="text")
     */
    private $reponse;

     /**
    * @ORM\OneToOne(targetEntity="moocline\ExoBundle\Entity\Question",
    cascade={"persist"})
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

    /**
     * Set correct
     *
     * @param boolean $correct
     * @return Reponse
     */
    public function setCorrect($correct)
    {
        $this->correct = $correct;

        return $this;
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
     * Set reponse
     *
     * @param string $reponse
     * @return Reponse
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;

        return $this;
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
     * Set question
     *
     * @param \moocline\ExoBundle\Entity\Question $question
     * @return Reponse
     */
    public function setQuestion(\moocline\ExoBundle\Entity\Question $question = null)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \moocline\ExoBundle\Entity\Question 
     */
    public function getQuestion()
    {
        return $this->question;
    }
}
