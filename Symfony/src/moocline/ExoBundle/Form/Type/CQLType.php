<?php

namespace moocline\ExoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class CQLType extends AbstractType
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
        $builder->add('Reponses', 'textarea', array('label' => $question->getQuestion(), 'required' => false, 'attr' => array('placeholder' => 'Entrez la reponse')));
    }

/*    public function setDefaultOptions(OptionsResolverInterface $resolver)
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
        return 'mooc_exobundle_cql';
    }
}
