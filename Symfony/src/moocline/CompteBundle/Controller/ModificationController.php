<?php
// src/moocline/CompteBundle/Controller/CompteController.php
namespace moocline\CompteBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use moocline\CompteBundle\Entity\User;
use moocline\CompteBundle\Form\UserType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class ModificationController extends Controller // name of controlle file
{
  public function modificationEtuAction($id)
  {

    $user = $this->getDoctrine()
                ->getRepository('moocline\CompteBundle\Entity\User')
                ->find($id);
    if ($user == null) {
      throw $this->createNotFoundException('User inexistant');
    }
    $form = $this->createForm(new UserType, $user);

      $request = $this->get('request');

      if ($request->getMethod() == 'POST'){
       
        $form->bind($request);
        if ($form->isValid()){
       
     //     $user->getImage()->upload();
          $em = $this->getDoctrine()->getManager();

          //$em->persist($user);
          $em->flush();
          //if ($user->getPassword() == $user->getConfirmPassword())
            return $this->redirect($this->generateUrl('vue_Etudiant', array('id' => $user->getId())));
          //else echo "error";
        }
      }
      return $this->render('mooclineCompteBundle:Modification:Modification.html.twig', 
        array('form' => $form->createView(), 'user' => $user, 
          ));     
  }
  
  public function modificationEnsAction($id)
  {
    $user = $this->getDoctrine()->getRepository('moocline\CompteBundle\Entity\User')->find($id);

    $form = $this->createForm(new UserType(), $user);

      $request = $this->get('request');

      if ($request->getMethod() == 'POST'){
        $form->bind($request);
        if ($form->isValid()){
          $em = $this->getDoctrine()->getManager();
          $em->persist($user);
          $em->flush();
          return $this->redirect($this->generateUrl('vue_Enseignant', array('id' => $user->getId())));
        }
      }
      return $this->render('mooclineCompteBundle:Modification:Modification.html.twig', 
        array('form' => $form->createView(), 'user' => $user, 
          ));
  }
  
  public function voirEtuAction($id)
  {
    $repository = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('mooclineCompteBundle:User');
    $user = $repository->find($id);
//  echo $user->getEmail();
  
    return $this->render('mooclineCompteBundle:Modification:EtuVue.html.twig', 
      array('id' => $user->getId(), 'nom' => $user->getNom(), 'prenom' => $user->getPrenom(),
           'email' => $user->getEmail(), 'password' => $user->getPassword()));
  }
  
  public function voirEnsAction($id)
  {
    $repository = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('mooclineCompteBundle:User');
    $user = $repository->find($id);
//  echo $user->getEmail();
  
    return $this->render('mooclineCompteBundle:Modification:EnsVue.html.twig', 
      array('id' => $user->getId(), 'nom' => $user->getNom(), 'prenom' => $user->getPrenom(),
            'email' => $user->getEmail(), 'password' => $user->getPassword()));
  }
}

//http://tutorial.symblog.co.uk/docs/doctrine-2-the-blog-model.html