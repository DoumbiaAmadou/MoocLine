<?php

namespace Moocline\AuthentificationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MooclineAuthentificationBundle:Default:index.html.twig', array('name' => $name));
    }
}
