<?php

namespace moocline\ExoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class CQCMType extends AbstractType
{
	private $listeQuest;
    
	public __construct($questions)
	{
		$this->listQuest = $questions;
	}
	
	
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		foreach($this->listQuest as $question)
		{
			$builder->add('Reponses', 'entity', array(
					'label' => $question->getQuestion(),
					'class' => 'mooclineExoBundle:Reponse',
					'choices' => $question->getReponses(), 'multiple' => true, 'expanded' => true));
		}
		
		
		
		
		
		
	}

 /*   public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'moocline\ExoBundle\Entity\Question'
        ));
    }*/

    /**
     * @return string
     */
    public function getName()
    {
        return 'mooc_exobundle_cqcm';
    }
}
