<?php

namespace moocline\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends Controller
{
   

    
    public function indexAction($name)
    {
        return $this->render('mooclineCompteBundle:Default:index.html.twig', array('name' => $name));
    }

    public function dashboardEtuAction($id)
    {
        $user =$this->getDoctrine()
                ->getRepository('moocline\CompteBundle\Entity\User')
                ->find($id);
        $cours=$user->getCours();
        
        
        return $this->render('mooclineCompteBundle:Dashboard:EtuDashboard.html.twig', 
                array('user' => $user));
    }

    public function DashboardAdminAction($id)
    {
        $user =$this->getDoctrine()
                ->getRepository('moocline\CompteBundle\Entity\User')
                ->find($id);
                
        return $this->render('mooclineCompteBundle:Dashboard:AdminDashboard.html.twig', 
                array('user' => $user));
    }
    
 
   public function dashboardEnsAction($id)
    {
        $user =$this->getDoctrine()
                ->getRepository('moocline\CompteBundle\Entity\User')
                ->find($id);
        $v=false;
        $cours=$user->getCours();
        foreach ($cours as $c){
            $chapitres = $c->getChapitres();
            foreach($chapitres as $chap){
                $feuilles = $chap->getFeuilles();
                if($feuilles->count() >0) $v = true;
            }
        }
        
       
          
           
       
        
        return $this->render('mooclineCompteBundle:Dashboard:EnsDashboard.html.twig', 
                array('user' => $user,'ex' => $v));
    }
    
}
?>