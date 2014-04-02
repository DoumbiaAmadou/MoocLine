<?php

namespace moocline\CoursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FeuilleExercice
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="moocline\CoursBundle\Entity\FeuilleExerciceRepository")
 */
class FeuilleExercice
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
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

     /**
    * @ORM\OneToOne(targetEntity="moocline\CoursBundle\Entity\Cours",
    cascade={"persist"})
    */
    private $cours;

    
     /**
* @ORM\OneToMany(targetEntity="moocline\CoursBundle\Entity\Exercice", mappedBy="FeuilleExercice")
    **/

    private $Exercices;



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
     * @return Feuille
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
     * Set cours
     *
     * @param \moocline\CoursBundle\Entity\Cours $cours
     * @return Feuille
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Exercices = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add Exercices
     *
     * @param \moocline\CoursBundle\Entity\Exercice $exercices
     * @return FeuilleExercice
     */
    public function addExercice(\moocline\CoursBundle\Entity\Exercice $exercices)
    {
        $this->Exercices[] = $exercices;
        $exercices->setFeuilleExercice($this);
        return $this;
    }

    /**
     * Remove Exercices
     *
     * @param \moocline\CoursBundle\Entity\Exercice $exercices
     */
    public function removeExercice(\moocline\CoursBundle\Entity\Exercice $exercices)
    {
        $this->Exercices->removeElement($exercices);
    }

    /**
     * Get Exercices
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getExercices()
    {
        return $this->Exercices;
    }
}
