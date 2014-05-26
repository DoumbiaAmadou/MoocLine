<?php

namespace moocline\ExoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use moocline\ExoBundle\Entity\FeuilleEx;
use moocline\ExoBundle\Entity\FeuilleExEtu;
use moocline\ExoBundle\Entity\Exercice;
use moocline\ExoBundle\Entity\Question;
use moocline\ExoBundle\Entity\Reponse;
use moocline\ExoBundle\Entity\ReponseEtu;

use moocline\ExoBundle\Form\Type\FullFeuilleExType;
use moocline\ExoBundle\Form\Type\CorrectionExoLibreType;

use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\HttpFoundation\Request;

class CorrExoController extends Controller
{
    public function resolveFExAction(Request $request, $id)
    {		
		
		$em=$this->getDoctrine()->getManager();
		$feuille = $em->getRepository('mooclineExoBundle:FeuilleEx')->find($id);
		$dbId = $feuille->getId();
		
		//$exercices = new ArrayCollection();
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

		$form = $this->createForm(new FullFeuilleExType($feuille));
		
		if ($request->isMethod('POST'))
		{
			$form->bind($request);
           	if ($form->isValid())
			{				
				$feuilleEtu = $form->getData();
				
				$donneesEx = new ArrayCollection();
				$donneesExQCM = new ArrayCollection();
				
				
				foreach($feuilleEtu as $rep)
				{
					$donneesEx->add($rep);
				}
				
				$num =0;
				
				//$feuilleRes = new FeuilleExEtu();
				//$feuilleRes->setFeuilleRef($feuille);
				//$etudiant=$this->container->get('security.context')->getToken()->getUser();
				//$etudiant->addFeuille($feuilleRes);
				//var_dump($feuille->getVisible());
				
				foreach($exercicesCol as $ex)
				{
					if($ex->getType()=="qcm")
					{
						foreach($ex->getQuestions() as $quest)
						{
							$donneesExQCM->add($donneesEx->get($num));
							$num++;
						}
					}
					else{
						foreach($ex->getQuestions() as $quest)
						{
				//			$repEtu = new ReponseEtu();
				//			$repEtu->setNumQuest($num);
							
							$repE = new Reponse();
							$repE->setCorrect(false);
							$repE->setReponse($donneesEx->get($num));
							
				//			$repEtu->addReponse($repE);
				//			$feuilleRes->addReponseEtu($repEtu);
							$num++;
						}
					}
				}

				/*foreach($donneesExQCM as $numero => $listRepQCM)
				{
				//	$repEtu = new ReponseEtu();
				//	$repEtu->setNumQuest($numero);
				/*	foreach($listRepQCM as $repQCM)
					{
						$repEtu->addReponse($repQCM);
					}*/
				//	$feuilleRes->addReponseEtu($repEtu);
				//}

				$num =0;
				
				$resultat = 0;
				
				foreach($donneesExQCM as $repList)
				{
					foreach($repList as $reponse)
					{
						if($reponse->getCorrect() == true)
							$resultat+= ($reponse->getQuestion()->getPoint()/$reponse->getQuestion()->getNbGoodQuestion()) ;
						else 
							$resultat-= ($reponse->getQuestion()->getPoint()/($reponse->getQuestion()->getNbGoodQuestion()/2)) ;
					}					
				}
			
				foreach($donneesEx as $ex)
				{
					foreach($exercicesCol as $ex)
					{	
						if ($ex->getType()=="qrf")
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
						else
						{
							foreach($ex->getQuestions() as $quest)
							{
								$num++;
							}
						}
						
					}	
				}
			
				if($resultat<0) $resultat = 0 ;
				//$feuilleRes->setNote($resultat);
				//$feuille->addFeuilleEtu($feuilleRes);
				//$em->flush();
				
				return  $this->render('mooclineExoBundle:Correction:resolveFEx.html.twig', array('feuille' => $feuille,
					 'exercices' => $feuille->getExercices(), 
					 'titreFEx' => $feuille->getTitre()." Resultat actuel: ".$resultat."/".$feuille->getTotalPoint(), 
					 'type' => $feuille->getType(),
					 'nbEx' => $feuille->getExercices()->count(),
					  'list' => $listId, 
					  'form' => $form->createView()));
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
    
/*    public function correctionLibreAction($id)
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


		return $this->redirect($this->generateUrl("dashboard_Enseignant",array('id'=> $user->getId())));
        }
    }
    return $this->render('mooclineExoBundle:Correction:ExoLibre.html.twig',array('form' => $form->createView()));
      
    }
	
	public function TabBordController(){
		return $this->render('mooclineExoBundle:Default:EnsDashboard.html.twig');
	}*/
}
?>