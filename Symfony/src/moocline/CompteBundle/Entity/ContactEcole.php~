<?php

namespace moocline\CompteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactEcole
 *
 * @ORM\Table()
 * @ORM\Entity
 @ORM\Entity(repositoryClass="moocline\CompteBundle\Entity\ContactEcoleRepository")
 */
class ContactEcole
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
     * @ORM\Column(name="nom_admin", type="string", length=255)
     */
    private $nomAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_admin", type="string", length=255)
     */
    private $prenomAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_organisation", type="string", length=255)
     */
    private $nomOrganisation;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="taille", type="integer")
     */
    private $taille;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="integer")
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet", type="string", length=255)
     */
    private $sujet;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text")
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="code_postal", type="integer")
     */
    private $codePostal;


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
     * Set nomAdmin
     *
     * @param string $nomAdmin
     * @return ContactEcole
     */
    public function setNomAdmin($nomAdmin)
    {
        $this->nomAdmin = $nomAdmin;
    
        return $this;
    }

    /**
     * Get nomAdmin
     *
     * @return string 
     */
    public function getNomAdmin()
    {
        return $this->nomAdmin;
    }

    /**
     * Set prenomAdmin
     *
     * @param string $prenomAdmin
     * @return ContactEcole
     */
    public function setPrenomAdmin($prenomAdmin)
    {
        $this->prenomAdmin = $prenomAdmin;
    
        return $this;
    }

    /**
     * Get prenomAdmin
     *
     * @return string 
     */
    public function getPrenomAdmin()
    {
        return $this->prenomAdmin;
    }

    /**
     * Set nomOrganisation
     *
     * @param string $nomOrganisation
     * @return ContactEcole
     */
    public function setNomOrganisation($nomOrganisation)
    {
        $this->nomOrganisation = $nomOrganisation;
    
        return $this;
    }

    /**
     * Get nomOrganisation
     *
     * @return string 
     */
    public function getNomOrganisation()
    {
        return $this->nomOrganisation;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return ContactEcole
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return ContactEcole
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set taille
     *
     * @param integer $taille
     * @return ContactEcole
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;
    
        return $this;
    }

    /**
     * Get taille
     *
     * @return integer 
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     * @return ContactEcole
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    
        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set sujet
     *
     * @param string $sujet
     * @return ContactEcole
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;
    
        return $this;
    }

    /**
     * Get sujet
     *
     * @return string 
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return ContactEcole
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    
        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return ContactEcole
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    
        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return ContactEcole
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return ContactEcole
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codePostal
     *
     * @param integer $codePostal
     * @return ContactEcole
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    
        return $this;
    }

    /**
     * Get codePostal
     *
     * @return integer 
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }
}
