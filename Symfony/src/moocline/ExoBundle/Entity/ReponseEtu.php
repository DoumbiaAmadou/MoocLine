<?php

namespace moocline\ExoBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * ReponseEtu
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="moocline\ExoBundle\Entity\ReponseEtuRepository")
 */
class ReponseEtu
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
    * @ORM\ManyToOne(targetEntity="FeuilleExEtu", cascade={"persist"})
	* @ORM\JoinColumn(name="feuilleExEtu_id", referencedColumnName="id")
    */
    private $feuilleEtu;
	
    /**
     * @var integer
     *
     * @ORM\Column(name="numQuest", type="integer")
     */
    protected $numQuest;

    /**
    * @ORM\OneToMany(targetEntity="Reponse",mappedBy="ReponseEtu", cascade={"persist"})
    */
    protected $reponses;

	
	 /**
     * Constructor
     */
    public function __construct()
    {
        $this->reponses = new ArrayCollection();
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
     * Get feuilleEtu
     *
     * @return FeuilleExEtu
     */
    public function getFeuilleEtu()
    {
        return $this->feuilleEtu;
    }
	
	/**
     * Set feuilleEtu
     *
     * @param FeuilleExEtu $feuille
     * 
     */
    public function setFeuilleEtu(FeuilleExEtu $feuille)
    {
        $this->feuilleEtu = $feuille;
    }
	
    /**
     * Get numQuest
     *
     * @return integer 
     */
    public function getNumQuest()
    {
        return $this->numQuest;
    }
	
	/**
     * Set numQuest
     *
     * @param integer $numQuest
     * @return ReponseEtu
     */
    public function setNumQuest($numQuest)
    {
        $this->numQuest = $numQuest;
    }
	
    /**
     * Get reponses
     *
     * @return string 
     */
    public function getReponses()
    {
        return $this->reponses;
    }
	
    /**
     * Set reponses
     *
     * @param ArrayCollection $reponse
     *
     */
    public function setReponses(ArrayCollection $reponses)
    {
        $this->reponses = $reponses;
    }
    
	/**
     * Add reponse
     *
     * @param Reponse $reponse
     */
    public function addReponse(Reponse $reponse)
    {
		$rep = new Reponse();
		$rep->setCorrect($reponse->getCorrect());
		$rep->setReponse($reponse->getReponse());
        $this->reponses->add($rep);
    }
	
	 /**
     * Remove reponse
     *
     * @param Reponse $reponse
     */
    public function removeReponse(Reponse $reponse)
    {
		if($this->reponses->removeElement($reponse))
		return true;
		else return false;
    }

}
