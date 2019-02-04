<?php
/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 04/02/19
 * Time: 13:42
 */

namespace LSC\PlatformBundle\Controller;


use LSC\PlatformBundle\Entity\Annonces;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AddController extends Controller
{
    function indexAction(){


        if($_SERVER['REQUEST_METHOD']=='POST'){

            $annonce = new Annonces();
            $annonce->setTitle( filter_input(INPUT_POST,'title'));
            $annonce->setAdvert( filter_input(INPUT_POST,'text'));
            $annonce->setPrice( filter_input(INPUT_POST,'price'));
            $annonce->setCity( filter_input(INPUT_POST,'city'));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($annonce);
            $entityManager->flush();



        }

        return $this->render('LSCPlatformBundle:Default:add.html.twig',array());
    }

}