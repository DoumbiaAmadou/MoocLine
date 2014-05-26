<?php
// src/moocline/CompteBundle/AdminTask/Task.php

namespace moocline\CompteBundle\AdminTask;

use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use moocline\CompteBundle\Entity\Invitation as Invitation;

class Task {

	protected $container;

	public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function sendInvitation($mail){

    	$invitation = new Invitation;

    	$userManager = $this->container->get('fos_user.user_manager');
    	$user = $userManager->createUser();
        $user->setEnabled(true);
        $user->setMail($mail);
        $user->setSuperAdmin(true);

    	// mail d'envoi de code d'invitation
    	$message = \Swift_Message::newInstance()
	        ->setSubject('Code d\'invitation moocline app.')
	        ->setFrom('moocline.notreply@gmail.com')
	        ->setTo($mail)
	        ->setBody($this->renderView('mooclineCompteBundle:Admin:invitation.txt.twig',
	        								array('code' => $code)))
    	;
    	$this->container->get('mailer')->send($message);
    }
}