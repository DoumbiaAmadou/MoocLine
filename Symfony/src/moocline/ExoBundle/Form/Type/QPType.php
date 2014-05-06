<?php

namespace moocline\ExoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class QPType extends AbstractType
{
    
    /**
     * @param OptionsResolverInterface $resolver
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
         
         ->add('question', 'textarea', array('attr' => array('placeholder' =>'Entrez la question')))
		 ->add('file', 'file',array('label' => "Charger un fichier",'required' => false))
		 ->add('valider','submit', array('label' => "Valider et Ajouter",'attr' => array('class' => 'btn btn-primary')))
		 ->add('sauvegarder','submit', array('label' => "Valider et Sauver", 'attr' => array('class' => 'btn btn-primary')));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'moocline\ExoBundle\Entity\Question'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mooc_exobundle_qp';
    }
}
