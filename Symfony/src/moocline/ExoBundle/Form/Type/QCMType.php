<?php

namespace moocline\ExoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class QCMType extends AbstractType
{
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
         
         ->add('question', 'textarea', array('attr' => array('placeholder' =>'Entrez la question')))
         ->add('Reponses', 'collection', array('type'         => new ReponseQCMType(),
                                                  'allow_add'    => true,
                                                  'allow_delete' => true,
                                                  'by_reference' => false,
                                                ))
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
        return 'mooc_exobundle_qcm';
    }
}
