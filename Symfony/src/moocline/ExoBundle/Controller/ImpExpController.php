<?php

namespace moocline\ExoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ImpExpController extends Controller
{
    public function importAction($name)
    {
        return $this->render('mooclineExoBundle:Create:index.html.twig');
    }
}
