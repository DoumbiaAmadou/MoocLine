<?php

namespace moocline\CoursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('mooclineCoursBundle:Default:index.html.twig', array('name' => $name));
    }
}
