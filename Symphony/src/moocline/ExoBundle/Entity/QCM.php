<?php

namespace moocline\ExoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Mooc\ExoBundle\Form\ExerciceType;
/**
 * QCM
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class QCM
{
    /**
     * @var integer
     *  /**
     * @ORM\ManyToOne(targetEntity="Sdz\BlogBundle\Entity\Article")
     * @ORM\JoinColumn(nullable=false)
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    private $question; 
    private $GoodReponse ; 
    private $BadReponse;

    


    public function __construct (){

         
    
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
      public function getquestion()
    {
        return $this->question;
    }
      public function setquestion($question)
    {
        return $this->question = $question;
    }
    
         public function getBadReponse()
    {
        return $this->BadReponse;
    }
      public function setBadReponse($BadReponse)
    {
        return $this->BadReponse =$BadReponse;
    }
     



    public function getGoodReponse()
    {
        return $this->GoodReponse;
    }
      public function setGoodReponse($GoodReponse)
    {
        return $this->GoodReponse = $GoodReponse;
    }
          
}
