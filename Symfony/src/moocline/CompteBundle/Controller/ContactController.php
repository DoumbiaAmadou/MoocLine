<?php
// src/moocline/CompteBundle/Controller/ContactController.php
namespace moocline\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use moocline\CompteBundle\Entity\Contact;
use moocline\CompteBundle\Entity\ContactEcole;
use moocline\CompteBundle\Entity\Organisation;
use moocline\CompteBundle\Form\Type\ContactFormType;
use moocline\CompteBundle\Form\Type\ContactEcoleType;


class ContactController extends Controller
{
    public function contactParticulierAction()
    {
        //création objet contact
        $contact = new Contact;  
        //on génère le formulaire
        $form = $this->createForm(new ContactFormType, $contact);
        // On récupère la requête
        $request = $this->get('request');
        // On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
            // On fait le lien Requête <-> Formulaire
            $form->bind($request);
            //vérification de la validation du formulaire...
            if ($form->isValid()){
                
                // Création de l'Organisation
                /*$org = new Organisation();
                $org->setNom($contact->NomOrganisation());
                $org->setType($contact->getType());
                $org->setTaille($contact->getTaille());
                $org->setVille($contact->getVille());
                $org->setPays($contact->getPays());
                $org->setCodePostal($contact->getCodePostal());
                $org->setTelephone($contact->getTelephone());
                $org->setAdresse($contact->getAdresse());
                */
                // sauvegarde des données dans la bd
                $em = $this->getDoctrine()->getManager();
                //$repertory_contact = $em->getRepository('mooclineCompteBundle:Contact');
                $em->persist($contact);
                $em->flush();
                //$em->persist($org);
                $em->flush();
                //envoi de mail
                $message = \Swift_Message::newInstance()
                        ->setSubject('[Contact Particulier]: '.$form->get('sujet')->getData())
                        ->setFrom('moocline.noreply@gmail.com')
                        ->setTo('moocline.noreply@gmail.com')
                        ->setBody($form->get('message')->getData());
                $this->get('mailer')->send($message);
                // redirection en cas de succès ...
                return $this->render('mooclineCompteBundle:Registration:index.html.twig');
                //return new Response("Merci pour votre interêt, Moocline admin !");

            }
        }
        // Réaffichage du formulaire ou premier affichage ...
        return $this->render('mooclineCompteBundle:Contact:contact.html.twig', 
                    array('form' => $form->createView(),));
    }

   public function contactEcoleAction() {
        //création objet contact
        $contactEcole = new ContactEcole;  
        //on génère le formulaire
        $form = $this->createForm(new ContactEcoleType, $contactEcole);
        // On récupère la requête
        $request = $this->get('request');
        // On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
            // On fait le lien Requête <-> Formulaire
            $form->bind($request);
            //vérification de la validation du formulaire...
            if ($form->isValid()){
                // sauvegarde des données dans la bd
                $em = $this->getDoctrine()->getManager();
                $em->persist($contactEcole);
                $em->flush();
                // redirection en cas de succès ...
                return $this->render('mooclineCompteBundle:Registration:index.html.twig');
            }
        }
        // Réaffichage du formulaire ou premier affichage ...
        return $this->render('mooclineCompteBundle:Contact:contact_ecole.html.twig', 
                    array('form' => $form->createView(),));
    }
    
       public function qsNousAction() {
        return $this->render('mooclineCompteBundle:Contact:qui_sommes_nous.html.twig');   
    }
}