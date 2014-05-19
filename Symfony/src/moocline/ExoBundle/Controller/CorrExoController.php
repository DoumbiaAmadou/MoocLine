<?php

namespace moocline\ExoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use moocline\ExoBundle\Entity\FeuilleEx;
use moocline\ExoBundle\Entity\Exercice;
use moocline\ExoBundle\Entity\Question;
use moocline\ExoBundle\Entity\Reponse;

use moocline\ExoBundle\Form\Type\FullFeuilleExType;
use moocline\ExoBundle\Form\Type\CorrectionExoLibreType;

use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\HttpFoundation\Request;

class CorrExoController extends Controller
{
    public function resolveFExAction(Request $request, $id)
    {		
		//
		$em=$this->getDoctrine()->getManager();
		$feuille = $em->getRepository('mooclineExoBundle:FeuilleEx')->find($id);
		$dbId = $feuille->getId();
		
		$exercices = new ArrayCollection();
		$exercices = $em->getRepository('mooclineExoBundle:Exercice')->findExByIdOfFExJoinedToFEx($dbId);
		$exercicesCol = new ArrayCollection();
		$listId = new ArrayCollection();
		$i = 0;
		
		foreach($exercices as $ex){
		
			$ex->setQuestions(new ArrayCollection());
			$questions = $em->getRepository('mooclineExoBundle:Question')->findQuestByIdOfExJoinedToEx($ex->getId());
			
			foreach($questions as $quest){	
				if($quest == $questions[0]) $listId->add($i);
				$i++;
				$quest->setReponses(new ArrayCollection());
			
				$reponses = $em->getRepository('mooclineExoBundle:Reponse')->findRepByIdOfQuestJoinedToQuest($quest->getId());
				
				
				foreach ($reponses as $rep){
					$quest->addReponse($rep);
				}
				$ex->addQuestion($quest);	
			}
			$exercicesCol->add($ex);
		}
		$feuille->setExercices($exercicesCol);
		//
		$form = $this->createForm(new FullFeuilleExType($feuille));
		
		if ($request->isMethod('POST')) {
			$form->bind($request);
           	if ($form->isValid())
			{
				$feuilleEtu = $form->getData();   //$this->getRequest()->request->get('mooc_exobundle_fullFEx');
				//
				
				//var_dump($feuilleEtu);
				
				$donneesEx = new ArrayCollection();
				foreach($feuilleEtu as $rep)
				{
					$donneesEx->add($rep);
				}
				
				$num =0;
				
				$resultat = 0;
				
				
				foreach($donneesEx as $ex)
				{
					foreach($exercicesCol as $ex)
					{
						if($ex->getType()=="qcm")
						{
							foreach($ex->getQuestions() as $quest)
							{
								/*$i=0;
								foreach($donneesEx as $champs)
								{
									var_dump($champs);
									foreach($champs as $reponse){
										if($i==$num){
										if($reponse->getCorrect() == true)
											$resultat+= ($quest->getPoint()/$quest->getNbGoodQuestion()) ;  
										else 
											$resultat-= ($quest->getPoint()/$quest->getNbGoodQuestion()) ;
										}
										$i++;
									}
								}*/
								$num++;
							}
						}
						else if ($ex->getType()=="qrf")
						{
							foreach($ex->getQuestions() as $quest)
							{
								$bon = false;
								foreach ($quest->getReponses() as $rep)
								{
									if($donneesEx->get($num) == $rep->getReponse())
									{
										$bon = true;
										break;
									}
								}
								if($bon == true)
								{
									$resultat+= $quest->getPoint();
								}
								$num++;
								
							}
							
						}
						
					}
					
					
				}
					//if($ex->getType()=="qcm")
				/*	{
						//foreach ($ex->getQuestions() as $quest)
						//{
						
							//var_dump($feuilleEtu);
							foreach($feuilleEtu as $repCochees)
							{
							
								foreach($repCochees as $repCochee){
									if($repCochee->getCorrect() ==true)
										$resultat+= ($quest->getPoint()/$quest->getNbGoodQuestion()) ;  
									else 
									$resultat-= ($quest->getPoint()/$quest->getNbGoodQuestion()) ;
								}
							}
							$num++;
						//}
						
					}*/
					/*else if($ex->getType()=="qrf")
					{			
						
						foreach($ex->getQuestions() as $quest)
						{	
							$bon = false;
							foreach ($quest->getReponses() as $rep){
								if($feuilleEtu['rep'.$numEx.'_'.$numQuest] == $rep->getReponse())
								{
									$bon = true;
									break;
								}
							}
							if($bon == true)
							{
								$resultat+= $quest->getPoint();
							}
							$numQuest++;
						}
					}
					else if($ex->getType()=="l")
					{
					
					}
					$numEx++;*/
				//}
				if($resultat<0) $resultat = 0 ;
				
				return  /*$this->render('mooclineExoBundle:Correction:creationEx.html.twig');*/$this->render('mooclineExoBundle:Correction:resolveFEx.html.twig', array('feuille' => $feuille,
					 'exercices' => $feuille->getExercices(), 
					 'titreFEx' => $feuille->getTitre()." Resultat actuel: ".$resultat."/".$feuille->getTotalPoint(), 
					 'type' => $feuille->getType(),
					 'nbEx' => $feuille->getExercices()->count(),
					  'list' => $listId, 
					  'form' => $form->createView()));
				//
			}
		}
		return $this->render('mooclineExoBundle:Correction:resolveFEx.html.twig',
		array('feuille' => $feuille,
		'exercices' => $feuille->getExercices(),
		'titreFEx' => $feuille->getTitre(),
		'type' => $feuille->getType(),
		'nbEx' => $feuille->getExercices()->count(),
		'list' => $listId,
		'form' => $form->createView()));
    }
    
    public function correctionLibreAction($id)
    {
        
    $user = $this->container->get('security.context')->getToken()->getUser(); 
     $em=$this->getDoctrine()->getManager();
    $exolibre = $em->getRepository('mooclineExoBundle:ExoLibreEtudiant')->find($id);  
    $form = $this->createForm(new CorrectionExoLibreTypeType(),$exolibre);
        
    if ($this->getRequest()->getMethod() == 'POST') {
               $form->bind($this->getRequest());
                 if ($form->isValid()) {
                     $exolibre=$form->getData();
                $em=$this->getDoctrine()->getManager();
		$em->flush();
// On redirige vers la page de visualisation de l'article

		return $this->redirect($this->generateUrl("dashboard_Enseignant",array('id'=> $user->getId())));
        }
    }
    return $this->render('mooclineExoBundle:Correction:ExoLibre.html.twig',array('form' => $form->createView()));
      
    }
}
?>