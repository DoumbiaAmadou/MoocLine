<?php
/*
namespace moocline\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('mooclineCompteBundle:Default:index.html.twig', array('name' => $name));
    }

    public function dashboardEtu_LCAction($id)
    {
    	$user = $this->getDoctrine()
                ->getRepository('moocline\CompteBundle\Entity\User')
                ->find($id);
        
    
           $listCours=$user->getCours(); // get tous les cours d'etudiant
            foreach($listCours as $cours) {
           //     echo $cours->getId();
            
            $cours = $this->getDoctrine()
                    ->getRepository('moocline\CoursBundle\Entity\Cours')
                    ->find($cours->getId());
            //    echo $cours->getNom();
            }
        }
    	return $this->render('mooclineCompteBundle:Dashboard:EtuDashboard_listCours.html.twig', 
                array('user' => $user, 'listCours' => $listCours));
    }

    public function dashboardEtu_RCAction($id)
    {
        $user = $this->getDoctrine()
                ->getRepository('moocline\CompteBundle\Entity\User')
                ->find($id);
        
    //    $listCours;
        
           $listCours=$user->getCours(); // get tous les cours d'etudiant
            foreach($listCours as $cours) {
           //     echo $cours->getId();
            
            $cours = $this->getDoctrine()
                    ->getRepository('moocline\CoursBundle\Entity\Cours')
                    ->find($cours->getId());
            //    echo $cours->getNom();
            }
        }
        return $this->render('mooclineCompteBundle:Dashboard:EtuDashboard_radierCours.html.twig', 
                array('user' => $user, 'listCours' => $listCours));
    }

/*    public function supprimerCoursAction($id, moocline\CoursBundle\Entity\Cours $cours) //User $id, 
    {
        $em = $this->getDoctrine()
                    -> getManager();
        $user = $em->getRepository('moocline\CompteBundle\Entity\User')
                    ->find($id);
        $etudiant = $em->getRepository('moocline\CompteBundle\Entity\Etudiant')
                        ->find($id);
   //     if ($user === null) {
   //         throw $this->createNotFoundException('User inexistant.');
   //     }
        if ($user->getId() == $etudiant->getId()){
           $listCours = $etudiant->getCours();
           foreach($listCours as $cours){
                if ($cours->getId() == $coursId){
                    $etudiant->removeCour(cours);
                }
           }
        } */
/*        $form = $this->createFormBuilder()->getForm();
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST'){
            $form->bind($request);
            if ($form->isValid()){
            //    $em->$this->getDoctrine()->getManager();
                $etudiant->removeCour(cours);
                $em->persist($etudiant);
                $em->flush();
                return $this->redirect($this->generateUrl('dashboard_Etudiant_listCours', array('id' => $user->getId())));
            }
        }
        
        return $this->render('mooclineCompteBundle:Dashboard:EtuDashboard_radierCours.html.twig', array('cours' => $cours, 'form' => $form->createView()
            ));
    } *//*

    public function dashboardEtu_PCAction($id)
    {
        $user = $this->getDoctrine()
                ->getRepository('moocline\CompteBundle\Entity\User')
                ->find($id);
        
    //    $listCours;
       

            $platformCours = $this->getDoctrine()
                            ->getRepository('moocline\CoursBundle\Entity\Cours')
                            ->findAll();
        
        return $this->render('mooclineCompteBundle:Dashboard:EtuDashboard_platformCours.html.twig', 
                array('user' => $user, 'listCours' => $platformCours));
    }

    public function dashboardEnsAction($id)
    {
        
    	return $this->render('mooclineCompteBundle:Dashboard:EnsDashboard.html.twig', array('id' => 1));
    }
}
*/

?>