<?php



namespace moocline\CoursBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CoursType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text',array('label' => 'Nom: ', 'required' => false))
            ->add('categorie', 'text', array('label' => 'Categorie: ', 'required' => false))
             ->add('date_debut', 'date',array(
                                                'years' => range(date('Y'), date('Y')+5),
                                                'input' => 'datetime',
                                                'format' => 'dd/MM/yyyy',
                                                'attr' => array('class' => 'date')
                                                ))
             ->add('date_fin', 'date',array(
                                                'years' => range(date('Y'), date('Y')+5),
                                                'input' => 'datetime',
                                                'format' => 'dd/MM/yyyy',
                                                'attr' => array('class' => 'date')
                                                ))
            ->add('presentation', 'ckeditor', array('label' => 'présentation: ' ,'config_name' => 'my_config'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'moocline\CoursBundle\Entity\Cours'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'moocline_CoursBundle_courstype';
    }
}