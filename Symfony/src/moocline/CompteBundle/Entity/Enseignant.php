<?php

namespace moocline\CompteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use moocline\CompteBundle\Entity\User;
use moocline\CompteBundle\Entity\Organisation;

/**
 * Enseignant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="moocline\CompteBundle\Entity\EnseignantRepository")
 */
class Enseignant
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
    * @ORM\OneToOne(targetEntity="moocline\CompteBundle\Entity\User",
    cascade={"persist"})
    */
    private $user;


    /**
    * @ORM\OneToOne(targetEntity="moocline\CompteBundle\Entity\Organisation",
    cascade={"persist"})
    */
    private $Organisation;

    
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
     * Set User
     *
     * @param User $user
     * @return User
     */
    public function setUser(User $user=null)
    {
        $this->user= $user;
        return $this;
    }

    /**
    * @return moocline\CompteBundle\Entity\User
    */
    
    public function getUser()
    {
        return $this->user;
    }


     /**
     * Set Organisation
     *
     * @param Organisation $organisation
     * @return Enseig
     */
    public function setOrganisation(Organisation $Organisation=null)
    {
        $this->Organisation= $Organisation;
        return $this;
    }

    /**
    * @return moocline\CompteBundle\Entity\Organisation
    */
    
    public function getOrganisation()
    {
        return $this->Organisation;
    }

}
