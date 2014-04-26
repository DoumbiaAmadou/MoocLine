<?php

namespace moocline\ExoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class QRFType extends AbstractType
{
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mooc\ExoBundle\Entity\QRF'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mooc_exobundle_qrf';
    }
}
