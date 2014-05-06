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
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_publication", type="date")
     */
    private $dateDePublication;

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
     * Set dateDePublication
     *
     * @param \DateTime $dateDePublication
     * @return Chapitre
     */
    public function setDateDePublication($dateDePublication)
    {
        $this->dateDePublication = $dateDePublication;
    
        return $this;
    }

    /**
     * Get dateDePublication
     *
     * @return \DateTime 
     */
    public function getDateDePublication()
    {
        return $this->dateDePublication;
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
}
