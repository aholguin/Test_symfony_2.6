<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use AppBundle\Entity\Usuario;

/**
 * Description of setRole
 * @author Anderson
 */
class setRole extends Controller {

    /**
  * @Route("/roles", name="roles")
     */
    public function indexAction() {
        //$user = new Usuario();
        $user = $this->getDoctrine()
        ->getRepository('AppBundle:Usuario')
        ->find(1);
        //var_dump($user);die();  
        
        $user->addRole('ROLE_ADMIN');
        //$user->removeRole('aholguin');
        
            $em = $this->getDoctrine()->getManager();
    $em->persist($user);
    $em->flush();

        
        var_dump($user);
        die('here to set roles');
    }

}
