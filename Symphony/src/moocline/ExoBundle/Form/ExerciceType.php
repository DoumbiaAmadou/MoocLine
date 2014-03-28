<?php

namespace moocline\ExoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExerciceType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
             
                ->add('QCM', 'collection', array('type'         => new QCMType(),
                                                  'allow_add'    => true,
                                                  'allow_delete' => true))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mooc\ExoBundle\Entity\Exercice'
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
