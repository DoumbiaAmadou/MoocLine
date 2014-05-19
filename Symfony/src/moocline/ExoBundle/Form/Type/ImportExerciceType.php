<?php

namespace moocline\ExoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class ImportExerciceType extends AbstractType
{
    public function __construct()
    {}

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
		 ->add('file', 'file',array('label' => "Charger un fichier XML",'required' => true))
		 ->add('sauver','submit', array('label' => "Visionner", 'attr' => array('class' => 'btn btn-primary')));
        
    }

   
    /**
     * @return string
     */
    public function getName()
    {
        return 'mooc_exobundle_import_Exercice';
    }
}
