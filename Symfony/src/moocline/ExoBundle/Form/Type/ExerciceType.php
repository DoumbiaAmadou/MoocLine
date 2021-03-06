<?php

namespace moocline\ExoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface; 

class ExerciceType extends AbstractType
{
	private $type;
	
	public function __construct($type)
    {
        $this->type = $type;
    }

        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('intitule', 'text');

		if($this->type=="qcm"){
			$builder->add('Questions', 'collection', array('type'   => new QCMType(),
                                                  'allow_add'    => true,
                                                  'allow_delete' => true));
		}
		if($this->type=="qrf"){
			$builder->add('Questions', 'collection', array('type'   => new QRFType(),
                                                  'allow_add'    => true,
                                                  'allow_delete' => true));
		}
		if($this->type=="p"){
			$builder->add('Questions', 'collection', array('type'   => new QPType(),
                                                  'allow_add'    => true,
                                                  'allow_delete' => true));
		}
		if($this->type=="l"){
			$builder->add('Questions', 'collection', array('type'   => new QLType(),
                                                  'allow_add'    => true,
                                                  'allow_delete' => true));
		}
				 
        $builder
				 ->add('valider','submit', array('label' => "Valider et Reprendre", 'attr' => array('class' => 'btn btn-primary')))
				 ->add('sauvegarder','submit', array('label' => "Sauver", 'attr' => array('class' => 'btn btn-primary')));
        
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'moocline\ExoBundle\Entity\Exercice'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mooc_exobundle_exercice';
    }
}
