<?php
// src/moocline/CompteBundle/Form/Type/ContactFormType.php
namespace moocline\CompteBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder
            ->add('email',  'email')
            ->add('sujet',  'text')
            ->add('message','textarea')
            ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'moocline\CompteBundle\Entity\Contact'
        ));
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'moocline_comptebundle_contact';
    }
}