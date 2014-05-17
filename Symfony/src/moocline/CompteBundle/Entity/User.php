<?php

namespace moocline\CompteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="moocline\CompteBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    protected $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    protected $prenom;

    /**
     * @var date
     *
     * @ORM\Column(name="date_naissance", type="date")
     */
    protected $date_naissance;    
    
    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=255)
     */
    protected $niveau;

    /**
    * @var string $image
    **
    @ORM\Column(name="image", type="string", length=255, nullable=true)
    */
    protected $image;

   /*function __construct() {

    }*/

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
     * @return User
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
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set Date_naissance
     *
     * @param date $date_naissance
     * @return User
     */
    public function setDateNaissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    /**
     * Get date_naissance
     *
     * @return date 
     */
    public function getDateNaissance()
    {
        return $this->date_naissance;
    }

    /**
     * Set niveau
     *
     * @param string $niveau
     * @return User
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return string 
     */
    public function getniveau()
    {
        return $this->niveau;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return User
     */

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }
}
