<?php

namespace moocline\CompteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="moocline\CompteBundle\Entity\EtudiantRepository")
 */
class Etudiant
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
    * @ORM\ManyToMany(targetEntity="moocline\CoursBundle\Entity\Cours",
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
     * Constructor
     */
    public function __construct()
    {
        $this->cours = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set user
     *
     * @param \moocline\CompteBundle\Entity\User $user
     * @return Etudiant
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
     * Add cours
     *
     * @param \moocline\CompteBundle\Entity\Cours $cours
     * @return Etudiant
     */
    public function addCour(\moocline\CoursBundle\Entity\Cours $cours)
    {
        $this->cours[] = $cours;

        return $this;
    }

    /**
     * Remove cours
     *
     * @param \moocline\CompteBundle\Entity\Cours $cours
     */
    public function removeCour(\moocline\CoursBundle\Entity\Cours $cours)
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
}
