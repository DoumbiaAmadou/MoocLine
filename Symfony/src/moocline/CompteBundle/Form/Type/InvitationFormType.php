<?php

namespace moocline\CompteBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

use moocline\CompteBundle\Form\DataTransformer\InvitationToCodeTransformer;

class InvitationFormType extends AbstractType
{
    protected $invitationTransformer;

    public function __construct(InvitationToCodeTransformer $invitationTransformer)
    {
        $this->invitationTransformer = $invitationTransformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addViewTransformer($this->invitationTransformer, true);
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'class' => 'moocline\CompteBundle\Entity\Invitation',
            'required' => true,
            //'cascade_validation' => true,
        ));
    }

    public function getParent()
    {
        return 'text';
    }

    public function getName()
    {
        return 'moocline_invitation_type';
    }

}