<?php
// src/moocline/CompteBundle/Form/Type/RegistrationFormType.php
namespace moocline\CompteBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder
            ->add('username',         'text', array('label' => 'Votre pseudo:'))
            ->add('prenom',           'text')
            ->add('nom',              'text')
            ->add('email',            'email')
            //->add('date_naissance',   'date')
            ->add('date_naissance', 'date', array(
                                            'years' => range(date('Y'), date('Y')-70),
                                            'input'  => 'datetime',
                                            'widget' => 'choice',
                                            'format' => 'yyyy MM dd',
                                            //'days' => array(1),
                                            'empty_value' => array('year' => 'Année', 'month' => 'Mois', 'day' => 'Jour')
                                            )
            )
            ->add('niveau',           'choice', array(  'choices' => array ( 
                                                                        'dc'  => 'Doctarant(e)',
                                                                        'mst' => 'Master / Ingénieur',
                                                                        'lc'  => 'Licence',
                                                                        'ly'  =>  'Lycée',
                                                                        'clg' =>  'Collège',
                                                                        'prm' =>  'Primaire'),
                                                        'required' => false,
                                                        'empty_value' => 'Selectionnez votre niveau',)
            )
            ;
    }

    public function getName()
    {
        return 'moocline_user_registration';
    }
}