<?php

namespace moocline\ExoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class CQRFType extends AbstractType
{
    
    /**
     * @param OptionsResolverInterface $resolver
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Reponses', 'text', array('label' => "Reponses", 'required' => false, 'attr' => array('placeholder' => 'Entrez la reponse')));
    }

/*    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'moocline\ExoBundle\Entity\Question'
        ));
    }*/

    /**
     * @return string
     */
    public function getName()
    {
        return 'mooc_exobundle_cqrf';
    }
}
