<?php

namespace moocline\ExoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use moocline\ExoBundle\Entity\QCM;
use moocline\ExoBundle\Entity\QRF;
use moocline\ExoBundle\Entity\Exercice;
use moocline\ExoBundle\Form\ExerciceType;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MoocExoBundle:Default:index.html.twig', array('name' => $name));
    }
    public function creeExo($tab)
    {

    }

   	public function ajouterAction()
  	{
  		  // On crée un objet Article
		  $feuilleExerrcices = new Exercice();

		  // On crée le FormBuilder grâce à la méthode du contrôleur

			
		  $form= $this->createForm(new ExerciceType(),$feuilleExerrcices);

		  // On ajoute les champs de l'entité que l'on veut à notre formulaire
		
		   
		   
		  // Pour l'instant, pas de commentaires, catégories, etc., on les gérera plus tard

		  // À partir du formBuilder, on génère le formulaire
		 // $form = $form->getForm();

		  // On passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire toute seule
		  return $this->render('MoocExoBundle:Exo:ajouter.html.twig', array(
		    'form' => $form->createView(),
		  ));
}
   
}
