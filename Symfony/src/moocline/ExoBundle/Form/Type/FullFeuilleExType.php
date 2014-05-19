<?php

namespace moocline\ExoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use moocline\ExoBundle\Entity\FeuilleEx;

use Doctrine\Common\Collections\ArrayCollection;

class FullFeuilleExType extends AbstractType
{
	private $feuille;
	
	public function __construct($FEx)
    {
		$this->feuille = new FeuilleEx();
		$this->feuille->setType($FEx->getType());
		$this->feuille->setTitre($FEx->getTitre());
        $this->feuille->setExercices($FEx->getExercices());
		$this->feuille->setCours($FEx->getCours());
    }

        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$i = 1;
		//$j = 1;
		
		foreach($this->feuille->getExercices() as $exercice)
		{	
			
			foreach($exercice->getQuestions() as $question)
			{
				if($exercice->getType() == "qcm")
				{
					$builder->add($i, 'entity', array(
						'label' => $question->getQuestion(),
						'class' => 'mooclineExoBundle:Reponse',
						'choices' => $question->getReponses(), 'multiple' => true, 'expanded' => true));			
				}
				
				else if($exercice->getType() == "qrf")
				{
					$builder->add($i, 'text', array('label' => $question->getQuestion(), 'required' => false, 'attr' => array('placeholder' => 'Entrez la reponse')));
				}
				
				else if($exercice->getType() == "p")
				{
					$builder->add($i, 'file',array('label' => $question->getQuestion(),'required' => false));
				}
				
				else if($exercice->getType() == "l")
				{
					$builder->add($i, 'textarea', array('label' => $question->getQuestion(), 'required' => false, 'attr' => array('placeholder' => 'Entrez la reponse')));
				}
				$i++;
			}
			//$i++;
		}	
		$builder->add('valider','submit', array('label' => "soumettre", 'attr' => array('class' => 'btn btn-primary')));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mooc_exobundle_fullFEx';
    }
}