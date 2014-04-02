<?php

namespace moocline\ExoBundle\Form;

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
         
         ->add('question', new QuestionType())
         
          /*
           * Rappel :
           ** - 1er argument : nom du champ, ici « categories », car c'est le nom de l'attribut
           ** - 2e argument : type du champ, ici « collection » qui est une liste de quelque chose
           ** - 3e argument : tableau d'options du champ
           */
          ->add('GoodReponse', 'collection', array('type'         => new ReponseType(),
                                                  'allow_add'    => true,
                                                  'allow_delete' => true))
            ->add('BadReponse', 'collection', array('type'         => new ReponseType(),
                                                  'allow_add'    => true,
                                                  'allow_delete' => true)
            )
            ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mooc\ExoBundle\Entity\QCM'
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
