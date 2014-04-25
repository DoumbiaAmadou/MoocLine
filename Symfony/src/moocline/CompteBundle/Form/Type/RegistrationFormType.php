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
        //$builder->add('name');
        $builder
            //->add('username',         'text', array('label' => 'Votre pseudo:'))
            ->add('prenom',           'text')
            ->add('nom',              'text')
            //->add('email',            'email')
            ->add('date_naissance',   'date')
            ->add('niveau',           'choice', array(  'choices' => array ( 
                                                                        'dc'  => 'Doctarant(e)',
                                                                        'mst' => 'Master / Ingénieur',
                                                                        'lc'  => 'Licence',
                                                                        'ly'  =>  'Lycée',
                                                                        'clg' =>  'Collège',
                                                                        'prm' =>  'Primaire'),
                                                        'required' => false,))
            /*->add('password',            'repeated', array(
                                                           'first_name' => 'password',
                                                           'second_name' => 'confirm',
                                                           'type' => 'password',
                                                        )
            );
            */
            /*->add('password', 'repeated', array(
                                                        'type' => 'password',
                                                        'invalid_message' => 'Les mots de passe doivent correspondre',
                                                        'options' => array('required' => true),
                                                        'first_options'  => array('label' => 'Mot de passe'),
                                                        'second_options' => array('label' => 'Mot de passe (validation)'),
                                                ));
       */;
    }

    public function getName()
    {
        return 'moocline_user_registration';
    }
}