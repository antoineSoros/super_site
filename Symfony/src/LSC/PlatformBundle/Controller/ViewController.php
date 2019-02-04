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

class ViewController extends Controller
{
function indexAction(){
$id = $_GET['id'];
$repository = $this->getDoctrine()->getRepository(Annonces::class);
$annonce = $repository->find($id);
    return $this->render("LSCPlatformBundle:Default:view.html.twig",array('annonce'=>$annonce));
}
}