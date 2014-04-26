<?php

namespace moocline\ExoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * L
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="moocline\ExoBundle\Entity\LRepository")
 */
class L
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
     * @var integer
     *
     * @ORM\Column(name="max_char", type="integer")
     */

    private $max_char;

    /**
    * @ORM\OneToOne(targetEntity="moocline\ExoBundle\Entity\Question")
    cascade={"persist"})
    */
    private $question;

     /**
    * @ORM\OneToOne(targetEntity="moocline\ExoBundle\Entity\Reponse")
    cascade={"persist"})
    */
    private $reponse;



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
     * Set max_char
     *
     * @param integer $maxChar
     * @return L
     */
    public function setMaxChar($maxChar)
    {
        $this->max_char = $maxChar;

        return $this;
    }

    /**
     * Get max_char
     *
     * @return integer 
     */
    public function getMaxChar()
    {
        return $this->max_char;
    }

    /**
     * Set question
     *
     * @param \moocline\ExoBundle\Entity\Question $question
     * @return L
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

    /**
     * Set reponse
     *
     * @param \moocline\ExoBundle\Entity\Reponse $reponse
     * @return L
     */
    public function setReponse(\moocline\ExoBundle\Entity\Reponse $reponse = null)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get reponse
     *
     * @return \moocline\ExoBundle\Entity\Reponse 
     */
    public function getReponse()
    {
        return $this->reponse;
    }
}
