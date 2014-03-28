<?php

namespace moocline\ExoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exercice
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mooc\ExoBundle\Entity\ExerciceRepository")
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
    private $titre ; 
  

    /**
     * @var string
     *
     * @ORM\Column(name="questionList", type="string", length=255)
     */
    private $QRF ; 
    private $QCM ; 

    /**
     * Get id
     *
     * @return integer 
     */
     public function __construct()
    {
      $this->QRF = new \Doctrine\Common\Collections\ArrayCollection();
      $this->QCM = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    // getter setter
      public function settitre($titre)
    {
        $this->titre = $titre ; 
        return $titre ; 
    }
    public function gettitre()
    {
        return $this->titre ; 
    }
  

    /**
     * Get questionList
     *
     * @return string 
     */
    public function getQCM()
    {
        return $this->QCM;
    }
      public function setQCM($questionList)
    {
        $this->QCM = $QCM;

        return $this;
    }

    /**
     * Get questionList
     *
     * @return string 
     */
    public function getQRF()
    {
        return $this->QRF;
    }
     public function setQRF($questionList)
    {
        $this->QRF = $QRF;

        return $this;
    }
}
