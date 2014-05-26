<?php
// src/moocline/CompteBundle/Form/Type/EcoleFormType.php
namespace moocline\CompteBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EcoleFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder
            ->add('email',  'email')
            ->add('sujet',  'choice', array('choices' => array ( 
                                                        'inscription'  => 'inscription à la Plateforme',
                                                        'pbm_inscription' => 'problème d\'inscription',
                                                        'autre'  => 'Autre'),
                                                        'empty_value' => 'Selectionnez un sujet',))
            ->add('message','text')
            ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'moocline\CompteBundle\Entity\Organisation'
        ));
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'moocline_comptebundle_ecole';
    }
}