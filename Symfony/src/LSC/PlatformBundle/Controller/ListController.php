<?php
/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 04/02/19
 * Time: 11:59
 */

namespace LSC\PlatformBundle\Controller;
use LSC\PlatformBundle\Entity\Annonces;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ListController extends Controller
{
    public function indexAction()
    {
      $repository = $this->getDoctrine()->getRepository(Annonces::class);

      $annonces= $repository->findAll();
      var_dump($annonces);
        return $this->render('LSCPlatformBundle:Default:list.html.twig',array('annonces'=>$annonces));
    }


}