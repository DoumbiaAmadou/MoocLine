<?php
namespace moocline\CoursBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use moocline\CoursBundle\Entity\Cours;
use moocline\CoursBundle\Form\CoursType;

class CoursController extends Controller
{
    public function indexAction()
    {
        return $this->render('mooclineCoursBundle:Default:index.html.twig');
    }

    public function creerAction()
    {
    	$enseignant =$this->container->get('security.context')->getToken()->getUser(); 
        $cours= new Cours();
    $form = $this->createForm(new CoursType(), $cours);

       if ($this->getRequest()->getMethod() == 'POST') {
               $form->bind($this->getRequest());
                 if ($form->isValid()) {
// On l'enregistre notre objet $article dans la base de

		$cours=$form->getData();
                $cours->setUser($enseignant);
                
                
                // rajouter l'id de l'enseignant 
                
                $em=$this->getDoctrine()->getManager();
		$em->persist($cours);
		$em->flush();
// On redirige vers la page de visualisation de l'article

		return $this->redirect($this->generateUrl("moocline_cours_vue",array('id'=> $cours->getId())));
        }

      }
	return $this->render('mooclineCoursBundle:Cours:CreerCours.html.twig',array('form' => $form->createView()));
      

    
    }
    
    public function voirAction($id)
    {
      $repository = $this->getDoctrine()->getManager()->getRepository('mooclineCoursBundle:Cours');
	  $cours = $repository->find($id);
          
        return $this->render('mooclineCoursBundle:Cours:voir.html.twig',array('cours' => $cours));
    }
    
     public function voirEtudiantAction($id)
    {
      $repository = $this->getDoctrine()->getManager()->getRepository('mooclineCoursBundle:Cours');
	  $cours = $repository->find($id);
          
          
        return $this->render('mooclineCoursBundle:Cours:voirEtudiant.html.twig',array('cours' => $cours));
    }
    
    
    public function editionAction($id)
    {
         $cours=$this->getDoctrine()
                ->getRepository('moocline\CoursBundle\Entity\Cours')
                ->find($id);
    $form = $this->createForm(new CoursType(), $cours);

       if ($this->getRequest()->getMethod() == 'POST') {
               $form->bind($this->getRequest());
                 if ($form->isValid()) {
// On l'enregistre notre objet $article dans la base de
                     
		$cours=$form->getData();
                
                
                
                // rajouter l'id de l'enseignant 
                
                $em=$this->getDoctrine()->getManager();
		
		$em->flush();
// On redirige vers la page de visualisation de l'article

		return $this->redirect($this->generateUrl("moocline_cours_vue",array('id'=> $cours->getId())));
        }

      }
	return $this->render('mooclineCoursBundle:Cours:CreerCours.html.twig',array('form' => $form->createView()));
      

    
    }
    
   
}
