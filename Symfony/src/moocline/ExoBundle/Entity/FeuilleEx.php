<?php

namespace moocline\ExoBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * FeuilleEx
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FeuilleExRepository")
 */
class FeuilleEx
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
	*@ORM\Column(name="type", type="text")
	*/
	private $type;
	
     /**
     * @var string
     *
     * @ORM\Column(name="titre", type="text")
     */
    private $titre;
	
     /**
    * @ORM\OneToMany(targetEntity="Exercice",mappedBy="FeuilleEx", cascade={"persist"})
    */
    private $exercices;


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
		
        $this->exercices = new ArrayCollection();
    }

	public function __toString()
    {
        return (string) $this->getTitre()." (".$this->getType().")";
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
     * Set type
     *
     *@param string $type
     */
    public function setType($type){
		$this->type = $type;
    }
	
    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }
	
    /**
     * Set titre
     *
     *@param string $titre
     */
    public function setTitre($titre){
		$this->titre = $titre;
    }

    /**
     * Get exercices
     *
     * @return ArrayCollection 
     */
    public function getExercices()
    {
        return $this->exercices;
    }

    /**
    *Set exercices
    *
    */

    public function setExercices(ArrayCollection $exercices)
    {
        foreach ($exercices as $exercice){
            $exercice->setFeuilleEx($this);
        }
        $this->exercices = $exercices;
    }

    /**
     * Add exercice
     *
     * @param Exercice $exercice
     */
    public function addExercice(Exercice $exercice)
    {
		$ex = new Exercice();
        $ex->setFeuilleEx($this);
		$ex->setIntitule($exercice->getIntitule());
		$ex->setType($exercice->getType());
		$ex->setQuestions($exercice->getQuestions());
        $this->exercices->add($ex);
    }
	
    /**
     * Remove exercice
     *
     * @param Exercice $exercice
     */
    public function removeExercice(Exercice $exercice)
    {
		$exercice->setFeuilleEx(null);
        if($this->exercices->removeElement($exercice))
		return true;
		else return false;
    }

	/**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
	 public function upExFile()
	 {
		foreach ($this->getExercices() as $ex)
		{
			if($ex->getType=="QP")
			{
				$ex->uploadFile();
			}
		}
	 }
}
