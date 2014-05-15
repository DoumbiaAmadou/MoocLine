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
    
   public function ListAction($page)
    {
        $maxCours =2;
        $cours_count = $this->getDoctrine()
                ->getRepository('mooclineCoursBundle:Cours')
                ->getTotal();
        $pagination = array(
            'page' => $page,
            'route' => 'moocline_cours_list',
            'pages_count' => ceil($cours_count / $maxCours),
            'route_params' => array()
        );
 
        $request = $this->get('request');
 
    if( $request->getMethod() == 'POST' ) {
        // Récupération de la valeur ici
 
        $recherche=$request->get('moocline-catalog-search-id');
           $cours= $this->RechercheCours($recherche);      
      }
      else {
           $cours = $this->getDoctrine()->getRepository('mooclineCoursBundle:Cours')
                ->getList($page, $maxCours);
      }
                 
         return $this->render('mooclineCoursBundle:Cours:list.html.twig', array(
            'cours' => $cours,
            'pagination' => $pagination,
             
        ));
    } 
   
    public static function RechercheCours($recherche)
    {
        
    }
}
