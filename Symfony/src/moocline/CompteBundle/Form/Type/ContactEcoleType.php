<?php

// src/moocline/CompteBundle/Form/Type/ContactEcoleType.php
namespace moocline\CompteBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactEcoleType extends AbstractType
{
     /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomAdmin','text')
            ->add('prenomAdmin','text')
            ->add('nomOrganisation','text')
            ->add('email','email')
            ->add('type','choice', array('choices' => array ( 
                                                        'univ_ecole'  => 'Université/Ecole',
                                                        'college' => 'College',
                                                        'lycee' => 'Lycée',
                                                        'gouv' => 'institutions gouvermentales',
                                                        'autre'  => 'Autre'),
                                                        'empty_value' => '-- Selectionnez --',))
            ->add('taille', 'integer')
            ->add('telephone', 'integer')
            ->add('sujet','text')
            ->add('commentaire','textarea')
            ->add('pays','country')
            ->add('ville','text')
            ->add('adresse','text')
            ->add('codePostal','integer')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'moocline\CompteBundle\Entity\ContactEcole'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'moocline_comptebundle_contactecole';
    }
}
