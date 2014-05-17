<?php

namespace moocline\ExoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use moocline\ExoBundle\Entity\FeuilleEx;
use moocline\ExoBundle\Entity\Exercice;
use moocline\ExoBundle\Entity\Question;
use moocline\ExoBundle\Entity\Reponse;

use moocline\ExoBundle\Form\Type\FullFeuilleExType;

use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\HttpFoundation\Request;

class CorrExoController extends Controller
{
    public function resolveFExAction(Request $request)
    {		
		//
		$em=$this->getDoctrine()->getManager();
		$feuille = $em->getRepository('mooclineExoBundle:FeuilleEx')->find(1);
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
		$form = $this->createForm(new FullFeuilleExType($feuille)/*, $feuille*/);
		
		if ($request->isMethod('POST')) {
			$form->bind($request);
           	if ($form->isValid()) {
				
				
			}
		}
		return $this->render('mooclineExoBundle:Correction:resolveFEx.html.twig', array('feuille' => $feuille, 'exercices' => $feuille->getExercices(), 'titreFEx' => $feuille->getTitre(), 'type' => $feuille->getType(), 'nbEx' => $feuille->getExercices()->count(), 'list' => $listId, 'form' => $form->createView()));
    }
}

?>