<?php

namespace moocline\CoursBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ChapitreType extends AbstractType
{
	private $cours;
	
	public function __construct($cours)
    {
        $this->cours = $cours;
    }

        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('titre', 'text')
                
               ->add('cours', 'entity', array(
					'label' => "Cours",
					'class' => 'mooclineCoursBundle:Cours',
					'choices' => $this->cours))                                                  
                ->add('contenu', 'ckeditor', array('config_name' => 'my_config'))
                ->add('visible', 'choice', array('label' => 'Visibilité','choices' => array(1 => 'public',0 => 'privé')))
                ->add('valider','submit', array('label' => "Valider", 'attr' => array('class' => 'btn btn-primary')));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'moocline\CoursBundle\Entity\Chapitre'
        ));
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'moocline_coursbundle_chapitretype';
    }
}
