<?php
/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 04/02/19
 * Time: 11:59
 */

namespace LSC\PlatformBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ListController extends Controller
{
    public function indexAction()
    {
        return $this->render('LSCPlatformBundle:Default:list.html.twig');
    }


}