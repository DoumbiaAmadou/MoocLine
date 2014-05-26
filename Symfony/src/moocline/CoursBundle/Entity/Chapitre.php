<?php

namespace moocline\CoursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chapitre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="moocline\CoursBundle\Entity\ChapitreRepository")
 */
class Chapitre
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
     * @ORM\Column(name="titre", type="string", length=255)
     * 
     *
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="date")
     */
    private $dateCreation;

    

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

     /**
    * @ORM\ManyToOne(targetEntity="moocline\CoursBundle\Entity\Cours",
    cascade={"persist"})
    */
    private $cours;
	
	 /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean")
     */
    private $visible;
	
	
	/**
    * @ORM\OneToMany(targetEntity="moocline\ExoBundle\Entity\FeuilleEx",mappedBy="chapitre")
    */
    private $feuilles;
    
	
	public function __toString()
    {
        return (string) $this->getTitre()." (".$this->getCours()->__toString().")";
    }

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
     * Set titre
     *
     * @param string $titre
     * @return Chapitre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Chapitre
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    
        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

   


    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Chapitre
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    
        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set cours
     *
     * @param \moocline\CoursBundle\Entity\Cours $cours
     * @return Chapitre
     */
    public function setCours(\moocline\CoursBundle\Entity\Cours $cours = null)
    {
        $this->cours = $cours;
    
        return $this;
    }

    /**
     * Get cours
     *
     * @return \moocline\CoursBundle\Entity\Cours 
     */
    public function getCours()
    {
        return $this->cours;
    }
	
	/**
     * Add feuilles
     *
     * @param \moocline\ExoBundle\Entity\FeuilleEx $feuilles
     * @return Cours
     */
    public function addFeuille(\moocline\ExoBundle\Entity\FeuilleEx $feuilles)
    {
        $this->feuilles[] = $feuilles;
        $feuilles->setCours($this);
        return $this;
    }

    /**
     * Remove feuilles
     *
     * @param \moocline\ExoBundle\Entity\FeuilleEx $feuilles
     */
    public function removeFeuille(\moocline\ExoBundle\Entity\FeuilleEx $feuilles)
    {
        $this->feuilles->removeElement($feuilles);
    }

    /**
     * Get feuilles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFeuilles()
    {
        return $this->feuilles;
    }
	
	 /**
     * Get visible
     *
     * @return boolean 
     */
    public function getVisible()
    {
        return $this->visible;
    }
	
    /**
     * Set visible
     *
     * @param boolean $visible
     * @return FeuilleEx
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;
    
        return $this;
    }
}
