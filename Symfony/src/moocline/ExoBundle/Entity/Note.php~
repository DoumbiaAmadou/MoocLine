<?php

namespace moocline\ExoBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Exercice
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoteRepository")
 */
class Note
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
    * @ORM\ManyToOne(targetEntity="moocline\CompteBundle\Entity\User", cascade={"persist"})

    */
    private $users;

	/**
    * @ORM\OneToOne(targetEntity="Reponse",mappedBy="Feuille", cascade={"persist"})
    */
	private $feuilleEX;
	
	
  
    /**
     * @var string
     *
     * @ORM\Column(name="note", type="float")
     */
    private $note;



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
     * Set note
     *
     * @param float $note
     * @return Note
     */
    public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return float 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set users
     *
     * @param \moocline\CompteBundle\Entity\User $users
     * @return Note
     */
    public function setUsers(\moocline\CompteBundle\Entity\User $users = null)
    {
        $this->users = $users;
    
        return $this;
    }

    /**
     * Get users
     *
     * @return \moocline\CompteBundle\Entity\User 
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set feuilleEX
     *
     * @param \moocline\ExoBundle\Entity\Reponse $feuilleEX
     * @return Note
     */
    public function setFeuilleEX(\moocline\ExoBundle\Entity\Reponse $feuilleEX = null)
    {
        $this->feuilleEX = $feuilleEX;
    
        return $this;
    }

    /**
     * Get feuilleEX
     *
     * @return \moocline\ExoBundle\Entity\Reponse 
     */
    public function getFeuilleEX()
    {
        return $this->feuilleEX;
    }
}
