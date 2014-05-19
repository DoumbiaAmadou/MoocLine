<?php
// src/moocline/CompteBundle/Form/Type/RegistrationFormType.php
namespace moocline\CompteBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class CorrectionExoLibreType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        

        // add your custom field
        $builder
            ->add('reponseEtu','text',array('disabled' => true))    
            ->add('remarque',         'text')
            ->add('note',           'number')
           ;
    }

    public function getName()
    {
        return 'moocline_exo_resolveExoLibre';
    }
}