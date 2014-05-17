<?php

namespace moocline\ExoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface; 

class CExerciceType extends AbstractType
{
	private $ctype;
	private $exref;
	
	public function __construct($exercice, $type)
    {
        $this->ctype = $type;
		$this->exref = $exercice;
    }

        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        foreach($this->exref->getQuestions() as $question)
		{
			if($this->ctype=="QCM"){
				$builder->add('Questions', 'collection', array('type'   => new CQCMType($this->exref->getQuestions())/*,
                                                  'allow_add'    => true,
                                                  'allow_delete' => true*/));
			}
			if($this->ctype=="QRF"){
				$builder->add('Questions', 'collection', array('type'   => new CQRFType($this->exref->getQuestions())/*,
                                                  'allow_add'    => true,
                                                  'allow_delete' => true*/));
			}
			if($this->ctype=="QP"){
				$builder->add('Questions', 'collection', array('type'   => new CQPType($this->exref->getQuestions())/*,
                                                  'allow_add'    => true,
                                                  'allow_delete' => true*/));
			}
			if($this->ctype=="QL"){
				$builder->add('Questions', 'collection', array('type'   => new CQLType($this->exref->getQuestions())/*,
                                                  'allow_add'    => true,
                                                  'allow_delete' => true*/));
			}
				 
			/* $builder
				 ->add('valider','submit', array('label' => "Valider et Reprendre", 'attr' => array('class' => 'btn btn-primary')))
				 ->add('sauvegarder','submit', array('label' => "Sauver", 'attr' => array('class' => 'btn btn-primary')));*/
        }
    }
    
 /*  //**
     * @param OptionsResolverInterface $resolver
     * /
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'moocline\ExoBundle\Entity\Exercice'
        ));
    }*/

    /**
     * @return string
     */
    public function getName()
    {
        return 'mooc_exobundle_cexercice';
    }
}
