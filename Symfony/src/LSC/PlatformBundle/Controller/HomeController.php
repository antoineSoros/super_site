<?php
/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 04/02/19
 * Time: 11:37
 */

namespace LSC\PlatformBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        $test = 'Hello';
        return $this->render('LSCPlatformBundle:Default:home.html.twig',['test'=>$test]);
    }

}