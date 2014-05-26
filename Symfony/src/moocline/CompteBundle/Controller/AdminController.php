<?php
// src/moocline/CompteBundle/Controller/AdminController.php

namespace moocline\CompteBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\UserEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;

use moocline\CompteBundle\Entity\Invitation;
use moocline\CompteBundle\Entity\Organisation;
use moocline\CompteBundle\Entity\Enseignant;
use moocline\CompteBundle\Entity\ContactEcole;
use moocline\CompteBundle\Entity\User;
use moocline\CompteBundle\Form\Type\EnseignantFormType;

class AdminController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('mooclineCompteBundle:Admin:accueilAdmin.html.twig', 
        	array('taskList' => $taskList));
    }
    
    public function adminRegisterAction(){

    	$userManager = $this->get('fos_user.user_manager');
    	$user = $userManager->createUser();
        $user->setEnabled(true);
        $user->addRole('ROLE_ADMIN');
        // On récupère la requête
	    $request = $this->get('request');
	    // dispatcher ...
	    $dispatcher = $this->container->get('event_dispatcher');
        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

	  	//$userEns = new User;  
		//on génère le formulaire
		$form = $this->createform(new EnseignantFormType($this->getDoctrine()->getManager()), $user);
		
	    
	    // On vérifie qu'elle est de type POST
	    if ($request->getMethod() == 'POST') {
	    	// On fait le lien Requête <-> Formulaire
	      	$form->bind($request);
	      	//vérification de la validation du formulaire...
			if ($form->isValid()){
				//$invitation = $form["invitation"]->getData();
				/*$contact = $this->getDoctrine()
    				 ->getRepository('moocline\CompteBundle\Entity\ContactEcole')
    				 ->findOneByEmail($email);
				*/
				// Creéation de l'user
	    		/*$userManager = $this->get('fos_user.user_manager');
	    		$user = $userManager->createUser();
	        	$user->setEnabled(true)
	        		->setUsername($form["username"]->getData())
	        		->setNom($form["nom"]->getData())
			    	->setPrenom($form["prenom"]->getData())
			    	->setEmail($form["email"]->getData())
			    	->setDateNaissance($form["date_naissance"]->getData())
			    	->setNiveau($form["niveau"]->getData())
			    	->setPlainPassword($form["plainPassword"]->getData())
			    	->setSuperAdmin(true);

	        	$userManager->updateUser($user);

	        	// création compte enseignant responsable
	        	$enseignant = new Enseignant;
	        	$enseignant->setUser($user);

	        	// Création de l'organisation
	    		$org = new Organisation;
	    		$org->setNom($contact->getNomOrganisation())
	    			->setType($contact->getType())
	    			->setTaille($contact->getTaille)
	    			->setVille($contact->getVille)
	    			->setPays($contact->getPays())
	    			->setCodePostal($contact->getCodePostal)
	    			->setTelepone($contact->getTelephone())
	    			->setAdresse($contact->getAdresse())
	    			->addEnseignant($enseignant);

	    		$enseignant->setOrganisation($org);

				//envoi de mail d'activatiopn ...
				/*$contenu = "Please click on this link to activate your account: no link yet ;) ";
				$message = \Swift_Message::newInstance()
					        ->setSubject('Account Activation at moocline')
					        ->setFrom('moocline.noreply@gmail.com')
					        ->setTo('amadou.beidari@gmail.com')
					        ->setBody($contenu);
		        //->setBody($this->renderView('mooclineCompteBundle:Register:email.txt.twig', array('name' => $name)));
		    	
		    	$this->get('mailer')->send($message);*/
				// redirection en cas de succès ...
				/*return $this->render('mooclineCompteBundle:Admin:adminRegister.html.twig', 
					array('form' => $form->createView(),));
					*/
				//$user = $form->getData();
				$event = new FormEvent($form, $request);
                $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);

                $userManager->updateUser($user);

                if (null === $response = $event->getResponse()) {
                    $url = $this->container->get('router')->generate('fos_user_registration_confirmed');
                    $response = new RedirectResponse($url);
                }

                $dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

                return $response;

				


				
				
				
				/*$userManager->updateUser($user);
				return new Response('<p>Soumission recue ;) haha haha ....</p>');*/
		    } 
		    else {
		    	return new Response('<p>Soumission invalide :( snifff ....</p><br> <br>'
		    		.var_dump($form->getData()));
		    }
		}
		 
		// Réaffichage du formulaire ou premier affichage ...
		return $this->render('mooclineCompteBundle:Admin:adminRegister.html.twig', 
			array('form' => $form->createView()));
			
    }

    public function sendInvitationAction($email) {

    	// formulaire à dcréer 
    	/*
		* to do
		* $builder->add('roles', 'choice', array(
    		'choices' => array('ROLE_USER' => 'Standard User', 'ROLE_ADMIN' => 'Administrator')
			));
    	*/

    	// Invitation
	    $invitation = new Invitation;
		//$invitation->setUser($user);
		$invitation->setEmail($email);
		$invitation->send();
		// sauvegarde dans la base de données
		$em = $this->getDoctrine()->getManager();
		$em->persist($invitation);
        $em->flush();

		// User
		$userManager = $this->get('fos_user.user_manager');
		$user = $userManager->createUser();
    	$user->setEnabled(true)
    		->setUsername($email)
	    	->setEmail($email)
	    	->setPlainPassword('password')
	    	//->setSuperAdmin(true)
	    	->addRole('ROLE_ADMIN')
	    	->setInvitation($invitation)
	    ;
    	$userManager->updateUser($user);

		// mail d'envoi de code d'invitation
		$message = \Swift_Message::newInstance()
	        ->setSubject('Code d\'invitation moocline app.')
	        ->setFrom('moocline.noreply@gmail.com')
	        ->setTo($email)
	        ->setBody($this->renderView('mooclineCompteBundle:Admin:invitation.html.twig',
	        							array('code' => $invitation->getCode())),
	        							'text/html');
		$this->get('mailer')->send($message);

		return new Response('<p>invitation envoyée ;) haha haha ....</p>');
    }
}
