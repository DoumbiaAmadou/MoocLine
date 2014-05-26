<?php

namespace moocline\ExoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExoLibreEtudiant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="moocline\ExoBundle\Entity\ExoLibreEtudiantRepository")
 */
class ExoLibreEtudiant
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
    * @ORM\OneToOne(targetEntity="moocline\CompteBundle\Entity\User", cascade={"persist"})
    */
    private $etudiant;
    
    /**
    * @ORM\OneToOne(targetEntity="Exercice", cascade={"persist"})
    */
    private $exercice;
    /**
     * @var string
     *
     * @ORM\Column(name="reponseEtu", type="text")
     */
    private $reponseEtu;

    /**
     * @var string
     *
     * @ORM\Column(name="remarque", type="text", nullable=true)
     * 
     */
    private $remarque;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer")
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
     * Set reponseEtu
     *
     * @param string $reponseEtu
     * @return ExoLibreEtudiant
     */
    public function setReponseEtu($reponseEtu)
    {
        $this->reponseEtu = $reponseEtu;
    
        return $this;
    }

    /**
     * Get reponseEtu
     *
     * @return string 
     */
    public function getReponseEtu()
    {
        return $this->reponseEtu;
    }

    /**
     * Set remarque
     *
     * @param string $remarque
     * @return ExoLibreEtudiant
     */
    public function setRemarque($remarque)
    {
        $this->remarque = $remarque;
    
        return $this;
    }

    /**
     * Get remarque
     *
     * @return string 
     */
    public function getRemarque()
    {
        return $this->remarque;
    }

    /**
     * Set note
     *
     * @param integer $note
     * @return ExoLibreEtudiant
     */
    public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->note;
    }
}
