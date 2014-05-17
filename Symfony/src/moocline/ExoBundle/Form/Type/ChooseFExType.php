<?php

namespace moocline\ExoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ChooseFExType extends AbstractType
{
	private $feuilles;
	
	public function __construct($feuillesEx)
    {
        $this->feuilles = $feuillesEx;
    }

        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('feuilles', 'entity', array(
					'label' => "Feuilles d'exercice",
					'class' => 'mooclineExoBundle:FeuilleEx',
					'choices' => $this->feuilles))
				 ->add('valider','submit', array('label' => "Ajouter à la feuille", 'attr' => array('class' => 'btn btn-primary')))
				 ->add('exporter','submit',array('label' => "Exporter", 'attr' => array('class' => 'btn btn-primary')));
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'mooc_exobundle_chooseFEx';
    }
}
