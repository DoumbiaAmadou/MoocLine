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
	*@var string
	*
	*@ORM\Column(name="statut", type="text")
	*/
	private $statut;
	
    /**
    * @ORM\ManyToOne(targetEntity="moocline\CompteBundle\Entity\User",
    cascade={"persist"})
    */
    private $enseignant;

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
    * @ORM\ManyToMany(targetEntity="moocline\CompteBundle\Entity\User",mappedBy="cours")
    */
    private $etudiants;
    
     /**
    * @ORM\OneToMany(targetEntity="moocline\ExoBundle\Entity\FeuilleEx",mappedBy="cours")
    */
    private $feuilles;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date")
     */
    private $dateFin;

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

    /**
     * Get statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->statut;
    }
	
    /**
     * Set statut
     *
     *@param string $statut
     */
    public function setStatut($statut){
		$this->statut = $statut;
    }    
    
    public function __toString() {
        return (string)$this->getNom();
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
		$this->feuilles = new \Doctrine\Common\Collections\ArrayCollection();
		$this->etudiants = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Cours
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    
        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Cours
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    
        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set enseignant
     *
     * @param \moocline\CompteBundle\Entity\User $enseignant
     * @return Cours
     */
    public function setEnseignant(\moocline\CompteBundle\Entity\User $enseignant = null)
    {
        $this->enseignant = $enseignant;
    
        return $this;
    }

    /**
     * Get enseignant
     *
     * @return \moocline\CompteBundle\Entity\User 
     */
    public function getEnseignant()
    {
        return $this->enseignant;
    }

    /**
     * Add etudiants
     *
     * @param \moocline\CompteBundle\Entity\User $etudiants
     * @return Cours
     */
    public function addEtudiant(\moocline\CompteBundle\Entity\User $etudiants)
    {
        $this->etudiants[] = $etudiants;
        $etudiants->setCours($this);
    
        return $this;
    }

    /**
     * Remove etudiants
     *
     * @param \moocline\CompteBundle\Entity\User $etudiants
     */
    public function removeEtudiant(\moocline\CompteBundle\Entity\User $etudiants)
    {
        $this->etudiants->removeElement($etudiants);
    }

    /**
     * Get etudiants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEtudiants()
    {
        return $this->etudiants;
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
}
