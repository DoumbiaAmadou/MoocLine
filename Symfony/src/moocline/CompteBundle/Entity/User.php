<?php

namespace moocline\CompteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
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
     * @ORM\Column(name="nom", type="string", length=50, nullable=true)
     */
    protected $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=true)
     */
    protected $prenom;

    /**
     * @var date
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=true)
     */
    protected $date_naissance;    
    
    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=255, nullable=true)
     */
    protected $niveau;

    /**
    * @var string $image
    **
    @ORM\Column(name="image", type="string", length=255, nullable=true)
    */
    protected $image;

    /**
    * @ORM\ManyToMany(targetEntity="moocline\CoursBundle\Entity\Cours")
	* @ORM\JoinColumn(nullable=false)
    */
    private $cours;

    /**
     * @ORM\OneToOne(targetEntity="Invitation", inversedBy="user")
     * @ORM\JoinColumn(referencedColumnName="code")
     * @Assert\Type(type="moocline\CompteBundle\Entity\Invitation")
     * @Assert\NotNull(message="Your invitation is wrong")
     */
    private $invitation;

    /**
    * @ORM\OneToMany(targetEntity="moocline\ExoBundle\Entity\FeuilleExEtu",mappedBy="User", cascade={"persist"})
* 
    */
    private $mesFeuilles;

    public function setInvitation(Invitation $invitation)
    {
        $this->invitation = $invitation;
    }

    public function getInvitation()
    {
        return $this->invitation;
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
    public function getNiveau()
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
    /**
     /**
     * Constructor
     */
    public function __construct()
    {
parent::__construct();
        $this->cours = new \Doctrine\Common\Collections\ArrayCollection();
$this->mesFeuilles = new ArrayCollection();
    }

    
    /**
     * Add cours
     *
     * @param \moocline\CoursBundle\Entity\Cours $cours
     * @return User
     */
    public function addCours(\moocline\CoursBundle\Entity\Cours $cours)
    {
        $this->cours[] = $cours;
    
        return $this;
    }

    /**
     * Remove cours
     *
     * @param \moocline\CoursBundle\Entity\Cours $cours
     */
    public function removeCours(\moocline\CoursBundle\Entity\Cours $cours)
    {
        $this->cours->removeElement($cours);
    }

    /**
     * Get cours
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCours()
    {
        return $this->cours;
    }
/**
     * Get mesFeuilles
     *
     * @return ArrayCollection 
     */
    public function getFeuilles()
    {
        return $this->mesFeuilles;
    }

    /**
    *Set mesFeuilles
    *
    */
    public function setFeuilles(ArrayCollection $mesFeuilles)
    {
        foreach ($mesFeuilles as $feuille){
            $feuille->setEtudiant($this);
        }
        $this->mesFeuilles = $mesFeuilles;
    }

    /**
     * Add feuille
     *
     * @param moocline\ExoBundle\Entity\FeuilleExEtu $feuille
     */
    public function addFeuille($feuille)
    {
        $feuille->setEtudiant($this);
$this->mesFeuilles->add($feuille);
    }
    /**
     * Remove feuille
     *
     * @param moocline\ExoBundle\Entity\FeuilleExEtu $feuille
     */
    public function removeFeuille($feuille)
    {
        $feuille->setEtudiant(null);
        if($this->mesFeuilles->removeElement($feuille))
        return true;
        else return false;
    }
}
