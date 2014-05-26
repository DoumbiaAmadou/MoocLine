<?php

namespace moocline\ExoBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * FeuilleExEtu
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FeuilleExEtuRepository")
 */
class FeuilleExEtu
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
	*@var string
	*
	*@ORM\Column(name="statut", type="text", nullable= true)
	*/
	private $statut;
	
	/**
    * @ORM\ManyToOne(targetEntity="moocline\CompteBundle\Entity\User", cascade={"persist"})
    */
    private $etudiant;
	
	/**
    * @ORM\ManyToOne(targetEntity="FeuilleEx", cascade={"persist"})
    */
	private $feuilleRef;
	
	/**
	* @ORM\Column(name="note", type="float", nullable= false)
	*/
	private $note;
	
    /**
    * @ORM\OneToMany(targetEntity="ReponseEtu",mappedBy="FeuilleExEtu", cascade={"persist"})
    */
    private $reponsesEtu;


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
        $this->reponsesEtu = new ArrayCollection();
    }

	/**
     * Get statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->statut;
    }
	
    /**
     * Set statut
     *
     *@param string $statut
     */
    public function setStatut($statut){
		$this->statut = $statut;
    }
	
	
	/**
     * Get etudiant
     *
     * @return moocline\CompteBundle\Entity\User
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }
	
	/**
     * Set etudiant
     *
     * @param moocline\CompteBundle\Entity\User $etudiant
     * 
     */
    public function setEtudiant($etudiant)
    {
        $this->etudiant = $etudiant;
    }
	
	/**
     * Get feuilleRef
     *
     * @return FeuilleEx
     */
    public function getFeuilleRef()
    {
        return $this->feuilleRef;
    }
	
	/**
     * Set feuilleRef
     *
     * @param FeuilleEx $feuille
     * 
     */
    public function setFeuilleRef(FeuilleEx $feuille)
    {
        $this->feuilleRef = $feuille;
    }
	
	/**
     * Get note
     *
     * @return float 
     */
    public function getNote()
    {
        return $this->note;
    }
	
    /**
     * Set note
     *
     *@param float $note
     */
    public function setNote($note){
		$this->note = $note;
    }
	
	/**
     * Get reponsesEtu
     *
     * @return ArrayCollection 
     */
    public function getReponsesEtu()
    {
        return $this->reponsesEtu;
    }

    /**
    *Set reponsesEtu
    *
    */
    public function setReponsesEtu(ArrayCollection $reponsesEtu)
    {
        $this->reponsesEtu = $reponsesEtu;
    }

    /**
     * Add reponseEtu
     *
     * @param ReponseEtu $reponse
     */
    public function addReponseEtu(ReponseEtu $reponse)
    {
		$reponse->setFeuilleEtu($this);
		$this->reponsesEtu->add($reponse);
    }
}
