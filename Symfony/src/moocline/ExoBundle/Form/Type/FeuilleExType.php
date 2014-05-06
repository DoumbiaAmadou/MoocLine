<?php

namespace moocline\ExoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use moocline\ExoBundle\Form\Type\ExerciceType ; 

class FeuilleExType extends AbstractType
{
	
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
				 ->add('titre', 'text', array('label' => "Titre"))
				 ->add('type', 'choice', array('label' => "Type de feuille", 'choices' => array('Defaut' => 'Tout','TD' =>'TD' ,'TP' => 'TP','Memoire' => 'Memoire','Projet' => 'Projet','Examen' => 'Examen')))
				 ->add('valider','submit', array('label' => "Créer", 'attr' => array('class' => 'btn btn-primary')));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'moocline\ExoBundle\Entity\FeuilleEx'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mooc_exobundle_feuilleEx';
    }
}
