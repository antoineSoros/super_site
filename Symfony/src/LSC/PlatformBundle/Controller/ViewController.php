<?php
/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 04/02/19
 * Time: 13:42
 */

namespace LSC\PlatformBundle\Controller;




use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ViewController extends Controller
{
function indexAction(){

    return $this->render("LSCPlatformBundle:Default:view.html.twig",array());
}
}