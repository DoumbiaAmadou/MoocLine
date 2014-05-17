<?php

namespace moocline\ExoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use moocline\ExoBundle\Entity\FeuilleEx;
use moocline\ExoBundle\Entity\Exercice;
use moocline\ExoBundle\Entity\Question;
use moocline\ExoBundle\Entity\Reponse;

use moocline\ExoBundle\Form\Type\FeuilleExType;
use moocline\ExoBundle\Form\Type\ChooseFExType;
use moocline\ExoBundle\Form\Type\ExerciceType;
use moocline\ExoBundle\Form\Type\QCMType;
use moocline\ExoBundle\Form\Type\QRFType;
use moocline\ExoBundle\Form\Type\QPType;
use moocline\ExoBundle\Form\Type\QLType;
use moocline\ExoBundle\Form\Type\ImportExerciceType;

use Doctrine\Common\Collections\ArrayCollection;

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
	
	public function createFeuilleExAction (Request $request)
	{
			$feuille = new FeuilleEx();
			$form = $this->createForm(new FeuilleExType(), $feuille);
			if ($request->isMethod('POST')) {
				$form->bind($request);
				
				if ($form->isValid()) {
					$em=$this->getDoctrine()->getManager();
					$repertory_user=$em->getRepository('mooclineExoBundle:FeuilleEx');
					$em = $this->getDoctrine()->getManager();
					$em->persist($form->getData());
					$em->flush();
					return $this->redirect($this->generateUrl('moocline_exo_create'));
				}
			}							
			return $this->render('mooclineExoBundle:Create:creationFEx.html.twig', array('form' => $form->createView()));	
	}
	
	public function createTypeExAction()
	{
		$session =  $this->get('session');
		if($session->has('exercice') && $session->get('exercice')!=null){
			$session->set('exercice', null);
		}
		return $this->render('mooclineExoBundle:Create:creationTypeEx.html.twig');
	}
	
	public function createExerciceAction(Request $request, $type)
	{
		$ctype = "typeFeuille";
		if($type=="QCM"){
			$ctype = "QCM";
			$form = $this->createForm(new QCMType(), new Question());
		}
		if($type=="QRF"){
			$ctype = "QRF";
			$form = $this->createForm(new QRFType(), new Question());
		}
		if($type=="QP"){
			$ctype = "Programme";
			$form = $this->createForm(new QPType(), new Question());
		}
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
			$session->set('exercice', $exercice);
		}
		
		if ($request->isMethod('POST')) {
			$form->bind($request);
			if ($form->isValid()) {
				$exercice->addQuestion($form->getData());
				if($form->get('sauvegarder')->isClicked()){
					return $this->redirect($this->generateUrl('moocline_exo_chooseFEx', array('type' => $type)));
				}
				else{

					if($type=="QCM"){
						$form = $this->createForm(new QCMType(), new Question());
					}
					if($type=="QRF"){
						$form = $this->createForm(new QRFType(), new Question());
					}
					if($type=="QP"){
						$form = $this->createForm(new QPType(), new Question());
					}
					if($type=="QL"){
						$form = $this->createForm(new QLType(), new Question());
					}
					
				}
			}
		}
		return $this->render('mooclineExoBundle:Create:creationEx.html.twig', array('exercice' => $exercice, 'nomEx' => $exercice->getIntitule(), 'vtype' => $type, 'type' => $exercice->getType(), 'num' => $exercice->getQuestions()->count()+1,'form' => $form->createView()));
	}

	public function apercuExerciceAction(Request $request, $type)
	{
		$session =  $this->get('session');
		if($session->has('exercice') && $session->get('exercice')!=null){
			$exercice = $session->get('exercice');
			
			$path = "";
			$form = $this->createForm(new ExerciceType($type), $exercice);
			if ($request->isMethod('POST')) {
				$form->bind($request);
				
				if ($form->isValid()) {
					$exercice = $form->getData();

					if($form->get('sauvegarder')->isClicked()){
						return $this->redirect($this->generateUrl('moocline_exo_chooseFEx', array('type' => $type)));
					}
					return $this->redirect($this->generateUrl('moocline_exo_createExercice',array('type' => $type)));
				}
			}					
			return $this->render('mooclineExoBundle:Create:apercuEx.html.twig', array('exercice' => $exercice, 'nomEx' => $exercice->getIntitule(), 'vtype' => $type, 'type' => $exercice->getType(), 'Questions' => $exercice->getQuestions(), 'numbQuestion' => $exercice->getQuestions()->count(), 'form' => $form->createView()));
				
		}
		else{
			return $this->redirect($this->generateUrl('moocline_exo_create'));
		}
	}
	
	public function chooseFeuilleExAction(Request $request, $type)
	{
		$session =  $this->get('session');
		if($session->has('exercice') && $session->get('exercice')!=null)
		{
			$exercice = $session->get('exercice');
			$em = $this->getDoctrine()->getManager();
			$feuilles = $em->getRepository('mooclineExoBundle:FeuilleEx')->findAll();//findFeuillesExByIdOfCoursJoinedToCours($cours->getId());
			$form = $this->createForm(new ChooseFExType($feuilles));
			if ($request->isMethod('POST'))
			{
				$form->bind($request);
				if ($form->isValid())
				{
					if($form->get('exporter')->isClicked()){
						//
						/* $data =$exercice; 
						 	$filename = "export_".date("Y_m_d_His").".csv"; 
    
					    	$response = $this->render('AcmeTestBundle:Default:adminCsv.html.twig', array('data' => $data)); 
					 
						    $response->setStatusCode(200);
						    $response->headers->set('Content-Type', 'text/csv');
						    $response->headers->set('Content-Description', 'Submissions Export');
						    $response->headers->set('Content-Disposition', 'attachment; filename='.$filename);
						    $response->headers->set('Content-Transfer-Encoding', 'binary');
						    $response->headers->set('Pragma', 'no-cache');
						    $response->headers->set('Expires', '0');
						 
						    $response->prepare();
						    $response->sendHeaders();
						    $response->sendContent();
					  	*/
						//
						if($exercice->getType() == "QCM"){
							$xmltype = "qcm";
						}
						else if ($exercice->getType() == "QRF"){
							$xmltype = "qrf";
						}
						else if ($exercice->getType() == "Programme"){
							$xmltype = "p";
						}
						else {
							$xmltype = "l";
						}
							
					    $filename = "export_".date("file_Y_m_d_His").".xml"; 
						$response = $this->render('mooclineExoBundle:Create:apercuexport.xml.twig', 
						array('exercice' => $exercice, 
							'nomEx' => $exercice->getIntitule(), 
							'vtype' => $type, 
							'xmltype' => $xmltype, 
							'type' => $exercice->getType(), 
							'Questions' => $exercice->getQuestions(), 
							'numbQuestion' => $exercice->getQuestions()->count(), 
							'form' => $form->createView()
							)
						);
						$response->setStatusCode(200);
						$response->headers->set('Content-Type', 'txt/xml');
						$response->headers->set('Content-Disposition', ' filename='.$filename);

						return $response ;
					}
					else{
						$data = $this->getRequest()->request->get('mooc_exobundle_chooseFEx');
						$id = intval($data['feuilles']) - 1;
						$dbId = $feuilles[$id]->getId();
						
						$feuille = $em->getRepository('mooclineExoBundle:FeuilleEx')->find($dbId);
						$intitule = "Exercice";
						$exercice->setIntitule($intitule);
						$feuille->addExercice($exercice);
						$em->flush();
						
						$exercices = new ArrayCollection();
						$exercices = $em->getRepository('mooclineExoBundle:Exercice')->findExByIdOfFExJoinedToFEx($dbId);
						$exercicesCol = new ArrayCollection();
						foreach($exercices as $ex){
							$ex->setQuestions(new ArrayCollection());
						
							$questions = $em->getRepository('mooclineExoBundle:Question')->findQuestByIdOfExJoinedToEx($ex->getId());
							
							foreach($questions as $quest){	
							
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

						$session->set('exercice', null);
						return $this->render('mooclineExoBundle:Create:apercuFEx.html.twig', array('feuille' => $feuille, 'exercices' => $feuille->getExercices(), 'titreFEx' => $feuille->getTitre(), 'type' => $feuille->getType(), 'vtype' => $type, 'numbEx' => $feuille->getExercices()->count()/*, 'form' => $form->createView()*/));
					}
				}
			}
			return $this->render('mooclineExoBundle:Create:chooseFEx.html.twig', array('form' => $form->createView()));
		}
		else{
			return $this->redirect($this->generateUrl('moocline_exo_create'));
		}
	}
	
	protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../../web/uploads/documents/importation';
    }
		
	public function importExerciceAction (Request $request){
			
        $form = $this->createForm(new ImportExerciceType()); 
           
        if ($request->isMethod('POST')) {
			$form->bind($request);
           	if ($form->isValid()) {
                if($form->get('sauvegarder')->isClicked()){
					//    $data = $request->
					//$data = $request->getRequest('mooc_exobundle_import_Exercice')->files->get('file');
					$data = $form['file']->getData();
					//$form['attachment']->getData();
					//$file = $data['file'] ; 
					$filename = "export_".date("file_Y_m_d_His"); 
					// $this->move($filename) ; 
					// $xml=simplexml_load_file($this->getUploadRootDir().'\\upfile\\','amadouFile'. $filename);
										
					$data->move($this->getUploadRootDir().'\\upfile\\','amadouFile'. $filename);
					//var_dump( $this->getUploadRootDir().'\\upfile\\amadoujdjdj'.$filename); 
					$xml=simplexml_load_file($this->getUploadRootDir().'\\upfile\\'.'amadouFile'. $filename);
					$string = '';
					$feuillesEx = new FeuilleEx(); 
					foreach($xml->children() as $exercice)
					{
						$exo = new Exercice(); 
						foreach($exercice->children() as $question)
						{
							$quest = new Question();
							$quest->setQuestion($question->text);
							$exo->addQuestion($quest);
							foreach($question->answers->children() as $answer )
							{
								foreach($answer->text as $text )
								{	$rep = new Reponse();
										
									if($answer->attributes()->good =='true')
										$rep->setCorrect(true); 
									else $rep->setCorrect(false);
										$rep->setReponse($text);
										$quest->addReponse($rep);
								}
							}
						}
					}

	
					$reponse = $this->render('mooclineExoBundle:Create:apercuexport.xml.twig', 
					array('exercice' => $exo)); 
					$reponse->setStatusCode(200);
					$reponse->headers->set('Content-Type', 'txt/xml');
					//$response->headers->set('Content-Description', 'Submissions Export');
					$reponse->headers->set('Content-Disposition', ' filename='.$filename);
					/*  $response->headers->set('Content-Transfer-Encoding', 'binary');
					*/
					//  $response->sendHeaders();
					// $response->sendContent();
					return $reponse ; 
					//array('exercice' => $exo));
					//return $reponse ;                   
					//   print_r($exo); 
					//  var_dump($exo);
				}
			}
			
		}
		return $this->render('mooclineExoBundle:Create:importExo.html.twig', array('form'=> $form->createView()));

	
    }
	
	
}
?>