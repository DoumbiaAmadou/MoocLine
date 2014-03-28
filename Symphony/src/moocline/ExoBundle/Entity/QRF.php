<?php

namespace moocline\ExoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QRF
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="moocline\ExoBundle\Entity\QRFRepository")
 */
class QRF
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
    * @ORM\OneToMany(targetEntity="moocline\ExoBundle\Entity\Question",mappedBy="QRF")
    cascade={"persist"})
    */
    private $questions;

     /**
    * @ORM\OneToMany(targetEntity="moocline\ExoBundle\Entity\Reponse",mappedBy="QRF")
    cascade={"persist"})
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
        $this->questions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reponses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add questions
     *
     * @param \moocline\ExoBundle\Entity\Question $questions
     * @return QRF
     */
    public function addQuestion(\moocline\ExoBundle\Entity\Question $questions)
    {
        $this->questions[] = $questions;

        return $this;
    }

    /**
     * Remove questions
     *
     * @param \moocline\ExoBundle\Entity\Question $questions
     */
    public function removeQuestion(\moocline\ExoBundle\Entity\Question $questions)
    {
        $this->questions->removeElement($questions);
    }

    /**
     * Get questions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Add reponses
     *
     * @param \moocline\ExoBundle\Entity\Reponse $reponses
     * @return QRF
     */
    public function addReponse(\moocline\ExoBundle\Entity\Reponse $reponses)
    {
        $this->reponses[] = $reponses;

        return $this;
    }

    /**
     * Remove reponses
     *
     * @param \moocline\ExoBundle\Entity\Reponse $reponses
     */
    public function removeReponse(\moocline\ExoBundle\Entity\Reponse $reponses)
    {
        $this->reponses->removeElement($reponses);
    }

    /**
     * Get reponses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReponses()
    {
        return $this->reponses;
    }
}
