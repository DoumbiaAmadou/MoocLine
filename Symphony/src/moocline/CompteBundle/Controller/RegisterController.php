<?php

namespace moocline\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use moocline\CompteBundle\Entity\User;
use moocline\CompteBundle\Entity\Etudiant;


class RegisterController extends Controller
{

  public function indexAction()
  {
	return $this->render('mooclineCompteBundle:Register:index.html.twig', array('pseudo' => 'test', 'nom' => 'test', 'prenom' => 'test', 'email' => 'test', 'password' => 'test'));

	
  }

public function inscrEtudiantAction(Request $request)
{
  	
  	//$etudiant = new Etudiant();
  	$userEtu = new User();

  	// Construction du formulaire à partir de $user
	$formBuilder = $this->createFormBuilder($userEtu);

	// On ajoute les champs de l'entité que l'on veut à notre formulaire
	$formBuilder
	  	->add('pseudo',           'text')
	  	->add('prenom',           'text')
	  	->add('nom', 			  'text')
	  	->add('email', 			  'email')
	  	->add('date_naissance',   'date')
	  	->add('niveau',           'choice', array(  'choices' => array ( 
									  								'dc'  => 'Doctarant(e)',
																	'mst' => 'Master / Ingénieur',
																	'lc'  => 'Licence',
																	'ly'  =>  'Lycée',
																	'clg' =>  'Collège',
																	'prm' =>  'Primaire'),
													'required' => false,))
	  	->add('password',         'password')
	  	->add('confirm_password', 'password');
	  
	//on génère le formulaire
	$form = $formBuilder->getForm();

	// On récupère la requête
    $request = $this->get('request');
	
    // On vérifie qu'elle est de type POST
    if ($request->getMethod() == 'POST') {
    
    	// On fait le lien Requête <-> Formulaire
      	//$form->bind($request);


		if ($form->isValid()){
		
			/*$pseudo = $form->get('pseudo')->getData();
			$nom = $form->get('nom')->getData();
			$prenom = $form->get('prenom')->getData();
			$email = $form->get('email')->getData();
			$dateN = $form->get('date_naissance')->getData();
			$niveau = $form->get('niveau')->getData();
			$password = $form->get('password')->getData();
			$confirm_password = $form->get('confirm_password')->getData();
			
			$userEtu->SetPseudo($pseudo);
			$userEtu->setNom($nom);
			$userEtu->setPrenom($prenom);
			$userEtu->setEmail($email);
			$userEtu->setDateNaissance($dateN);
			$userEtu->setNiveau($niveau);
			$userEtu->setPassword ($password);*/
			$em = $this->getDoctrine()->getManager();
  			$repertory_user = $em->getRepository('mooclineCompteBundle:User');
			$em->persist($userEtu);
			$em->flush();

			$contenu = "Please click on this link to activate your account: no link yet ;) ";
			$message = \Swift_Message::newInstance()
				        ->setSubject('Account Activation at moocline')
				        ->setFrom('moocline.noreply@gmail.com')
				        ->setTo('moocline.noreply@gmail.com')
				        ->setBody($contenu);
	        //->setBody($this->renderView('mooclineCompteBundle:Register:email.txt.twig', array('name' => $name)));
	    	
	    	$this->get('mailer')->send($message);
			
			return $this->render('mooclineCompteBundle:Register:index.html.twig', array('pseudo' => $pseudo));


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
