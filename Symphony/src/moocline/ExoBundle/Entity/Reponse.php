<?php

namespace moocline\ExoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mooc\ExoBundle\Entity\ReponseRepository")
 */

class Reponse
{

    /**
     ***@varinteger
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="answer", type="boolean")
     */
    private $answer;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text")
     */
   


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
     * Set answer
     *
     * @param boolean $answer
     * @return Reponse
     */
    public function setanswer($answer)
    {
        $this->answer = $answer;

        return $this->answer;
    }

    /**
     * Get answer
     *
     * @return boolean 
     */
    public function getanswer()
    {
        return $this->answer;
    }

}
