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
    * @ORM\OneToOne(targetEntity="moocline\CompteBundle\Entity\Enseignant",
    cascade={"persist"})
    */
    private $Enseignant;

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
     * Set Enseignant
     *
     * @param moocline\CompteBundle\Entity\Enseignant $enseignant
     * @return Cours
     */
    public function setEnseignant(moocline\CompteBundle\Entity\Enseignant $enseignant = null)
    {
        $this->Enseignant = $enseignant;

        return $this;
    }

    /**
     * Get Enseignant
     *
     * @return moocline\CompteBundle\Entity\Enseignant 
     */
    public function getEnseignant()
    {
        return $this->Enseignant;
    }
}
