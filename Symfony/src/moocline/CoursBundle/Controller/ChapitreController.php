<?php

namespace moocline\CoursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use moocline\CoursBundle\Entity\Chapitre;
use moocline\CoursBundle\Form\ChapitreType;

class ChapitreController extends Controller
{
    public function indexAction()
    {
        return $this->render('mooclineCoursBundle:Default:index.html.twig');
    }


    public function creerAction()
    {
        $chapitre=new Chapitre();
        $user = $this->container->get('security.context')->getToken()->getUser(); 
        $em = $this->getDoctrine()->getEntityManager();
         $query = $em->createQuery(
        'SELECT p
         FROM mooclineCoursBundle:Cours p
        WHERE p.enseignant = '. $user->getId() .''
        );

        $cours = $query->getResult();
        
      $form = $this->createForm(new ChapitreType($cours),$chapitre);
	if ($this->getRequest()->getMethod() == 'POST') {
             $form->bind($this->getRequest());
                if ($form->isValid()) {
                    $chapitre=$form->getData();
                    $chapitre->setDateCreation(new \DateTime('now'));
            
                  $data = $this->getRequest()->request->get('moocline_coursbundle_chapitretype');
                // $id_cours = intval($data['cours']) -1;   

                $dbId = $data['cours'];
            $courselect = $em->getRepository('mooclineCoursBundle:Cours')->findOneById($dbId);
                $chapitre->setCours($courselect);
                 
                
                $em=$this->getDoctrine()->getManager();
		$em->persist($chapitre);
		$em->flush();
// On redirige vers la page de visualisation de l'article

		return $this->redirect($this->generateUrl("moocline_chapitre_vue",array('id'=> $chapitre->getId())));
        }

      }
	return $this->render('mooclineCoursBundle:Chapitre:CreerChapitre.html.twig',array('formb' => $form->createView(), 'titre' => 'Nouveau CHapitre'));
      

    
    }
    
     public function voirAction($id)
    {
      $repository = $this->getDoctrine()->getManager()->getRepository('mooclineCoursBundle:Chapitre');
	  $chapitre = $repository->find($id);
          
        return $this->render('mooclineCoursBundle:Chapitre:voir.html.twig',array('chapitre' => $chapitre));
    }
    
     public function voirEtudiantAction($id)
    {
      $repository = $this->getDoctrine()->getManager()->getRepository('mooclineCoursBundle:Chapitre');
	  $chapitre = $repository->find($id);
          
          
        return $this->render('mooclineCoursBundle:Chapitre:voirEtudiant.html.twig',array('chapitre' => $chapitre));
    }
    
    
    public function editionAction($id)
    {
         $user = $this->container->get('security.context')->getToken()->getUser(); 
        $em = $this->getDoctrine()->getEntityManager();
        
    $query = $em->createQuery(
    'SELECT p
    FROM mooclineCoursBundle:Cours p
    WHERE p.enseignant = '. $user->getId() .''
    );

    $cours = $query->getResult();
    
         $chapitre=$this->getDoctrine()
                ->getRepository('moocline\CoursBundle\Entity\Chapitre')
                ->find($id);
       $form = $this->createForm(new ChapitreType($cours),$chapitre);
       
       if ($this->getRequest()->getMethod() == 'POST') {
               $form->bind($this->getRequest());
                 if ($form->isValid()) {
                     $chapitre=$form->getData();
// On l'enregistre notre objet $article dans la base de
                 
                  $data = $this->getRequest()->request->get('moocline_coursbundle_chapitretype');
                 $id_cours = intval($data['cours']) - 1;   

                $dbId = $cours[$id_cours]->getId();
            $courselect = $em->getRepository('mooclineCoursBundle:Cours')->findOneById($dbId);
                $chapitre->setCours($courselect);
                 
                
                $em=$this->getDoctrine()->getManager();
		$em->flush();
// On redirige vers la page de visualisation de l'article

		return $this->redirect($this->generateUrl("moocline_chapitre_vue",array('id'=> $chapitre->getId())));
        }

      }
	return $this->render('mooclineCoursBundle:Chapitre:CreerChapitre.html.twig',array('formb' => $form->createView(),'titre'=> 'Edition'));
      

    
}

   

}