<?php

namespace moocline\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use moocline\CompteBundle\Entity\User;
use moocline\CompteBundle\Entity\Etudiant;
use moocline\CompteBundle\Form\UserType;


class RegisterController extends Controller
{

	public function indexAction()
	{
		return $this->render('mooclineCompteBundle:Register:index.html.twig', array(
																				'pseudo' => 'test',
																				'nom' => 'test', 
																				'prenom' => 'test', 
																				'email' => 'test', 
																				'password' => 'test'
																			)
		);
	}

	public function inscrEtudiantAction(Request $request)
	{
	  	//$etudiant = new Etudiant();
	  	$userEtu = new User;  
		//on génère le formulaire
		$form = $this->createform(new UserType, $userEtu);
		// On récupère la requête
	    $request = $this->get('request');
	    // On vérifie qu'elle est de type POST
	    if ($request->getMethod() == 'POST') {
	    	// On fait le lien Requête <-> Formulaire
	      	$form->bind($request);
	      	//vérification de la validation du formulaire...
			if ($form->isValid()){
				// sauvegarde des données dans la bd
				/*$em = $this->getDoctrine()->getManager();
	  			$repertory_user = $em->getRepository('mooclineCompteBundle:User');
				$em->persist($userEtu);
				$em->flush();
				*/
				//envoi de mail d'activatiopn ...
				$contenu = "Please click on this link to activate your account: no link yet ;) ";
				$message = \Swift_Message::newInstance()
					        ->setSubject('Account Activation at moocline')
					        ->setFrom('moocline.noreply@gmail.com')
					        ->setTo('amadou.beidari@gmail.com')
					        ->setBody($contenu);
		        //->setBody($this->renderView('mooclineCompteBundle:Register:email.txt.twig', array('name' => $name)));
		    	
		    	$this->get('mailer')->send($message);
				// redirection en cas de succès ...
				return $this->render('mooclineCompteBundle:Register:index.html.twig');
		    }
		}
		 
		// Réaffichage du formulaire ou premier affichage ...
		return $this->render('mooclineCompteBundle:Register:etuForm.html.twig', array('form' => $form->createView(),));
	}
		

	public function inscriptionEnseignantAction(Request $request)
	{
	  $em=$this->getDoctrine()->getManager();
	  $repertory_user=$em->getRepository('mooclineCompteBundle:Enseignant');
	    
	  $ens = new User();
	    $formBuilder = $this->createFormBuilder($ens)
			->add('pseudo', 'text')
	        ->add('nom', 'text')
	        ->add('prenom', 'text')
			->add('email', 'text')
			->add('password', 'password')
			->add('action', 'submit')
			->getForm();
			

		$formBuilder->handleRequest($request);
		
	    if ($formBuilder->isValid())
		
	    {
		
			$pseudo = $formBuilder->get('pseudo')->getData();
			$nom = $formBuilder->get('nom')->getData();
			$prenom = $formBuilder->get('prenom')->getData();
			$email = $formBuilder->get('email')->getData();
			$password = $formBuilder->get('password')->getData();
			
			$ens->SetPseudo($pseudo);
			$ens->setNom($nom);
			$ens->setPrenom($prenom);
			$ens->setEmail($email);
			$ens->setPassword ($password);
			//$em->persist($ens)
			//$em->flush();
			return $this->render('mooclineCompteBundle:Register:index.html.twig', array('pseudo' => $pseudo, 'nom' => $nom, 'prenom' => $prenom, 'email' => $email, 'password' => $password));


	    }
		
	  
	 
		return $this->render('mooclineCompteBundle:Register:formInscEns.html.twig', array('formb' => $formBuilder->createView()));
	  }
}

?>
