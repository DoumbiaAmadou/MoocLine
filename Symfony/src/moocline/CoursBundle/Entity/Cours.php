<?php

namespace moocline\CoursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="moocline\CoursBundle\Entity\CoursRepository")
 */
class Cours
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255)
     */
    private $categorie;

    /**
    * @ORM\ManyToOne(targetEntity="moocline\CompteBundle\Entity\User",
    cascade={"persist"})
    */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="text")
     */
    private $presentation;


    /**
    * @ORM\OneToMany(targetEntity="moocline\CoursBundle\Entity\Chapitre",mappedBy="cours")
    */
    private $chapitres;
    
    

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
     * Set nom
     *
     * @param string $nom
     * @return Cours
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Cours
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    
    
    public function __toString() {
        return (string)$this->getNom();
    }

    /**
     * Set user
     *
     * @param \moocline\CompteBundle\Entity\User $user
     * @return Cours
     */
    public function setUser(\moocline\CompteBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \moocline\CompteBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     * @return Cours
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;
    
        return $this;
    }

    /**
     * Get presentation
     *
     * @return string 
     */
    public function getPresentation()
    {
        return $this->presentation;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->chapitres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add chapitres
     *
     * @param \moocline\CoursBundle\Entity\Chapitre $chapitres
     * @return Cours
     */
    public function addChapitre(\moocline\CoursBundle\Entity\Chapitre $chapitre)
    {
        $this->chapitres[] = $chapitre;
        $chapitres->setCours($this);
    
        return $this;
    }

    /**
     * Remove chapitres
     *
     * @param \moocline\CoursBundle\Entity\Chapitre $chapitres
     */
    public function removeChapitre(\moocline\CoursBundle\Entity\Chapitre $chapitre)
    {
        $this->chapitres->removeElement($chapitre);
        // Et si notre relation était facultative (nullable=true, cequi n'est pas notre cas ici attention) :
        // $chapitre->setCours(null);
    }

        
    

    /**
     * Get chapitres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChapitres()
    {
        return $this->chapitres;
    }

    /**
     * Set image
     *
     * @param \moocline\CoursBundle\Entity\Image $image
     * @return Cours
     */
    public function setImage(\moocline\CoursBundle\Entity\Image $image = null)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return \moocline\CoursBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }
}
