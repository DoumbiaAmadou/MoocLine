<?php

namespace moocline\CompteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
    public function setUser(moocline\CompteBundle\Entity\User $user=null)
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
    public function setOrganisation(moocline\CompteBundle\Entity\Organisation $Organisation=null)
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
