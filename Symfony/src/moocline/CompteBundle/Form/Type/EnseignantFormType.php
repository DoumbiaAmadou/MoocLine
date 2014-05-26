<?php
// src/moocline/CompteBundle/Form/Type/EnseignantFormType.php
namespace moocline\CompteBundle\Form\Type;

use moocline\CompteBundle\Form\DataTransformer\InvitationToCodeTransformer;
use moocline\CompteBundle\Form\Type\RegistrationFormType;
use moocline\CompteBundle\Entity\User;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EnseignantFormType extends AbstractType
{
    protected $entityManager;
    protected $invitation;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->invitation = new InvitationFormType(new InvitationToCodeTransformer($this->entityManager));
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('username',         'text', array('label' => 'Votre pseudo:'))
            ->add('prenom',           'text')
            ->add('nom',              'text')
            ->add('email',            'email')
            //->add('date_naissance',   'date')
            ->add('date_naissance', 'date', array(
                                            'years' => range(date('Y'), date('Y')-114),
                                            'input'  => 'datetime',
                                            'widget' => 'choice',
                                            'format' => 'yyyy MM dd',
                                            //'days' => array(1),
                                            'empty_value' => array('year' => 'Année', 'month' => 'Mois', 'day' => 'Jour')
                                            )
            )
            ->add('niveau',           'choice', array(  'choices' => array ( 
                                                                        'pr'  => 'Professeur',
                                                                        'mdc' => 'Maître de Conférence',
                                                                        'dr'  => 'Docteur',
                                                                        'dc'  => 'Doctarant(e)',
                                                                        'mst' => 'Master / Ingénieur',
                                                                        'lc'  => 'Licence',),
                                                        'required' => false,
                                                        'empty_value' => 'Selectionnez votre niveau',)
            )
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'form.password'),
                'second_options' => array('label' => 'form.password_confirmation'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
            ->add('invitation', $this->invitation, array('label' => 'Code Invitation'))
            ;
    }

    public function getName()
    {
        return 'moocline_ens_registration';
    }

   public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'moocline\CompteBundle\Entity\User',
            'cascade_validation' => true,
        ));
    }
}