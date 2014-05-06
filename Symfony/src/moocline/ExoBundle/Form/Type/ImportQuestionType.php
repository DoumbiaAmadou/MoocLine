<?php

namespace moocline\ExoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class ImportQuestionType extends AbstractType
{
    public function __construct()
    {}

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
		 ->add('file', 'file',array('label' => "Charger un fichier XML",'required' => true))
		 ->add('valider','submit', array('label' => "Valider et Ajouter",'attr' => array('class' => 'btn btn-primary')))
		 ->add('sauvegarder','submit', array('label' => "Valider et Sauver", 'attr' => array('class' => 'btn btn-primary')));
        
    }

   
    /**
     * @return string
     */
    public function getName()
    {
        return 'mooc_exobundle_import_Question';
    }
}
