<?php

namespace moocline\CoursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exercice
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="moocline\CoursBundle\Entity\ExerciceRepository")
 */
class Exercice
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
     * @ORM\Column(name="type", type="string", length=3)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

     /**
    * @ORM\ManyToMany(targetEntity="moocline\CoursBundle\Entity\FeuilleExercice",
    cascade={"persist"})
    */
    private $FeuilleExercice;


    

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
     * Set type
     *
     * @param string $type
     * @return Exercice
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
     * Set url
     *
     * @param string $url
     * @return Exercice
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->FeuilleExercice = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add FeuilleExercice
     *
     * @param \moocline\CoursBundle\Entity\FeuilleExercice $feuilleExercice
     * @return Exercice
     */
    public function addFeuilleExercice(\moocline\CoursBundle\Entity\FeuilleExercice $feuilleExercice)
    {
        $this->FeuilleExercice[] = $feuilleExercice;

        return $this;
    }

    /**
     * Remove FeuilleExercice
     *
     * @param \moocline\CoursBundle\Entity\FeuilleExercice $feuilleExercice
     */
    public function removeFeuilleExercice(\moocline\CoursBundle\Entity\FeuilleExercice $feuilleExercice)
    {
        $this->FeuilleExercice->removeElement($feuilleExercice);
    }

    /**
     * Get FeuilleExercice
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFeuilleExercice()
    {
        return $this->FeuilleExercice;
    }
}
