<?php

namespace moocline\CompteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username',         'text', array('label' => 'Votre pseudo:'))
            ->add('prenom',           'text')
            ->add('nom',              'text')
            ->add('email',            'email')
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
            ->add('password', 'repeated', array(
                                                        'type' => 'password',
                                                        'invalid_message' => 'Les mots de passe doivent correspondre',
                                                        'options' => array('required' => true),
                                                        'first_options'  => array('label' => 'Mot de passe'),
                                                        'second_options' => array('label' => 'Mot de passe (validation)'),
                                                ));
           /* ->add('username','text')
            ->add('usernameCanonical')
            ->add('email')
            ->add('emailCanonical')
            ->add('enabled')
            ->add('salt')
            ->add('password')
            ->add('lastLogin')
            ->add('locked')
            ->add('expired')
            ->add('expiresAt')
            ->add('confirmationToken')
            ->add('passwordRequestedAt')
            ->add('roles')
            ->add('credentialsExpired')
            ->add('credentialsExpireAt')
            ->add('nom','text')
            ->add('prenom','text')
            ->add('date_naissance','date')
            ->add('niveau')
            ->add('image')
        ;*/
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'moocline\CompteBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'moocline_comptebundle_user';
    }
}
