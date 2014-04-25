<?php

namespace moocline\ExoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use moocline\ExoBundle\Entity\Exercice;
use moocline\ExoBundle\Entity\Question;
use moocline\ExoBundle\Entity\Reponse;
use moocline\ExoBundle\Form\Type\ExerciceType;
use moocline\ExoBundle\Form\Type\QCMType;
use moocline\ExoBundle\Form\Type\QRFType;
use moocline\ExoBundle\Form\Type\QLType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;



class CreateExoController extends Controller
{

	public function indexAction()
	{
		$session =  $this->get('session');
		if($session->has('exercice') && $session->get('exercice')!=null){
			$session->set('exercice', null);				
		}
		return $this->render('mooclineExoBundle:Create:index.html.twig');
	}
	
	public function CreateQuestionAction(Request $request, $type)
	{
		if($type=="QCM"){
			$ctype = "QCM";
			$form = $this->createForm(new QCMType(), new Question());
		}
		if($type=="QRF"){
			$ctype = "QRF";
			$form = $this->createForm(new QRFType(), new Question());
		}
		/*if($type=="P"){
			$ctype = "Programme";
			$form = $this->createForm(new QPType(), new Question());
		}*/
		if($type=="QL"){
			$ctype = "Question libre";
			$form = $this->createForm(new QLType(), new Question());
		}
		
		
		$session =  $this->get('session');
		if($session->has('exercice') && $session->get('exercice')!=null && $session->get('exercice')->getType()==$ctype){
			$exercice = $session->get('exercice');
		}
		else{
			$intitule = "Exercice";
			$exercice = new Exercice();
			$exercice->setIntitule($intitule);
			$exercice->setType($ctype);
		}
		
		if ($request->isMethod('POST')) {
			$form->bind($request);
			if ($form->isValid()) {
				$exercice->addQuestion($form->getData());
				if($form->get('sauvegarder')->isClicked()){
					$em=$this->getDoctrine()->getManager();
					$repertory_user=$em->getRepository('mooclineExoBundle:Exercice');
					$em = $this->getDoctrine()->getManager();
					$em->persist($exercice);
					$em->flush();
					$session->set('exercice', null);
					return $this->redirect($this->generateUrl('moocline_exo_create'));
				}
				else{

					if($type=="QCM"){
						$form = $this->createForm(new QCMType(), new Question());
					}
					if($type=="QRF"){
						$form = $this->createForm(new QRFType(), new Question());
					}
					/*if($type=="P"){
						$form = $this->createForm(new QPType(), new Question());
					}*/
					if($type=="QL"){
						$form = $this->createForm(new QLType(), new Question());
					}
					
					$session->set('exercice', $exercice);
				}
			}
		}
		if($type=="QL")	return $this->render('mooclineExoBundle:Create:creationExL.html.twig', array('exercice' => $exercice, 'nomEx' => $exercice->getIntitule(), 'vtype' => $type, 'type' => $exercice->getType(), 'num' => $exercice->getQuestions()->count()+1,'form' => $form->createView()));	
		else return $this->render('mooclineExoBundle:Create:creationEx.html.twig', array('exercice' => $exercice, 'nomEx' => $exercice->getIntitule(), 'vtype' => $type, 'type' => $exercice->getType(), 'num' => $exercice->getQuestions()->count()+1,'form' => $form->createView()));
	}

	public function ApercuExerciceAction(Request $request, $type)
	{
	
		
		$session =  $this->get('session');
		if($session->has('exercice') && $session->get('exercice')!=null){
			$exercice = $session->get('exercice');
			
			$form = $this->createForm(new ExerciceType($type), $exercice);
			if ($request->isMethod('POST')) {
				$form->bind($request);
				
				if ($form->isValid()) {
					$exercice = $form->getData();
					//
					if($form->get('sauvegarder')->isClicked()){
						$em=$this->getDoctrine()->getManager();
						$repertory_user=$em->getRepository('mooclineExoBundle:Exercice');
						$em = $this->getDoctrine()->getManager();
						$em->persist($exercice);
						$em->flush();
						$session->set('exercice', null);
						return $this->redirect($this->generateUrl('moocline_exo_create'));
					}
					else{					
						$session->set('exercice', $exercice);
						return $this->redirect($this->generateUrl('moocline_exo_createQuestion',array('type' => $type)));
					}
				}
			}				
				
			if($type=="QL") return $this->render('mooclineExoBundle:Create:apercuExL.html.twig', array('exercice' => $exercice, 'nomEx' => $exercice->getIntitule(), 'vtype' => $type, 'type' => $exercice->getType(), 'Questions' => $exercice->getQuestions(), 'numbQuestion' => $exercice->getQuestions()->count(), 'form' => $form->createView()));
			else return $this->render('mooclineExoBundle:Create:apercuEx.html.twig', array('exercice' => $exercice, 'nomEx' => $exercice->getIntitule(), 'vtype' => $type, 'type' => $exercice->getType(), 'Questions' => $exercice->getQuestions(), 'numbQuestion' => $exercice->getQuestions()->count(), 'form' => $form->createView()));
				
		}
		else{
			return $this->redirect($this->generateUrl('moocline_exo_create'));
		}
	}
}
?>