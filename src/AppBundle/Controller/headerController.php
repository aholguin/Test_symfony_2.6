<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class headerController extends Controller {

    /**
     * @Route("/header", name="header")
     */
    public function indexAction() {
        //Se obtiene el menú
        $menu = $this->getDoctrine()->getRepository('AppBundle:ModuloHasRole')
                ->getMenu($this->getUser()->getroles());
        
        return $this->render('header.html.twig', array('menu' => $menu));
    }

}
