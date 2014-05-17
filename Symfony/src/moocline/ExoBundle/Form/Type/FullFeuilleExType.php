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
		//$feuille->setCours($FEx->getCours());
    }

        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$i = 1;
		$j = 1;
		
		foreach($this->feuille->getExercices() as $exercice)
		{	
			
			foreach($exercice->getQuestions() as $question)
			{
				$id = $question->getId();
				if($exercice->getType() == "QCM")
				{
					$builder->add('rep'.$i.'_'.$j, 'entity', array(
						'label' => $question->getQuestion(),
						'class' => 'mooclineExoBundle:Reponse',
						'choices' => $question->getReponses(), 'multiple' => true, 'expanded' => true));			
				}
				
				else if($exercice->getType() == "QRF")
				{
					$builder->add('rep'.$i.'_'.$j, 'text', array('label' => $question->getQuestion(), 'required' => false, 'attr' => array('placeholder' => 'Entrez la reponse')));
				}
				
				else if($exercice->getType() == "Programme")
				{
					$builder->add('rep'.$i.'_'.$j, 'file',array('label' => $question->getQuestion(),'required' => false));
				}
				
				else if($exercice->getType() == "Question libre")
				{
					$builder->add('rep'.$i.'_'.$j, 'textarea', array('label' => $question->getQuestion(), 'required' => false, 'attr' => array('placeholder' => 'Entrez la reponse')));
				}
				$j++;
			}
			$i++;
		}	
		
			/*	
			if($exercice->getType() == "QCM")
			{
					$builder->add('Questions', 'collection', array('type'   => new CQCMType(),
                                                  'allow_add'    => true,
                                                  'allow_delete' => true));
			}
			else if($exercice->getType() == "QRF")
			{
				$builder->add('Questions', 'collection', array('type'   => new CQRFType(),
                                                  'allow_add'    => true,
                                                  'allow_delete' => true));
			}
			else if($exercice->getType() == "Programme")
			{
				$builder->add('Questions', 'collection', array('type'   => new CQPType(),
                                                  'allow_add'    => true,
                                                  'allow_delete' => true));
			}
			else if($exercice->getType() == "Question libre")
			{
				$builder->add('Questions', 'collection', array('type'   => new CQLType(),
                                                  'allow_add'    => true,
                                                  'allow_delete' => true));
			}
			
		}
		//
		//$exercicesForm = new ArrayCollection();
		
		/*foreach($this->feuille->getExercices() as $exercice)
		{*/
				///*$exercicesForm*/$builder->add('exercices', new CExerciceType($exercice, $exercice->getType()));
			//	$builder->add('exercices','text', array('read_only' => true, 'label' => $this->feuille->getExercices()->count(), 'required' => false, 'attr' => array('placeholder' => 'Entrez la reponse')));
				
		//}

		//
		//$builder->add('exercices', $exercicesForm);
		//

    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mooc_exobundle_fullFEx';
    }
}