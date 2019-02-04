<?php

namespace LSC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LSCPlatformBundle:Default:index.html.twig');
    }
}
