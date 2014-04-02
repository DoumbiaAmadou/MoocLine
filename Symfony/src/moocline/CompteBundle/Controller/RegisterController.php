<?php

namespace moocline\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GLP\RegisterBundle\Entity\User;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



class RegisterController extends Controller
{

  public function indexAction()
  {
	return $this->render('mooclineCompteBundle:Register:index.html.twig', array('pseudo' => 'test', 'nom' => 'test', 'prenom' => 'test', 'email' => 'test', 'password' => 'test'));

	
  }

	
  public function inscriptionEnseignantAction(Request $request)
  {
  $em=$this->getDoctrine()->getManager();
  $repertory_user=$em->getRepository(CompteBundle:User);
  
  
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
		$em->persist($ens)
		$em->flush();
		return $this->render('mooclineCompteBundle:Register:index.html.twig', array('pseudo' => $pseudo, 'nom' => $nom, 'prenom' => $prenom, 'email' => $email, 'password' => $password));


    }
	
  
 
	return $this->render('mooclineCompteBundle:Register:formInscEns.html.twig', array('formb' => $formBuilder->createView()));
  }
}
?>
