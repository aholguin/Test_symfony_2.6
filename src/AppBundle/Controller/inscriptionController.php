<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\DatoUsuario;
use AppBundle\Form\DatoUsuarioType;

class inscriptionController extends controller {

    /**
     * @Route ("/inscripcion",name= "inscription")
     */
    public function indexAction(Request $request) {
        $entity = new DatoUsuario();
        //$form = $this->createCreateForm($entity);
        //$form->handleRequest($request);
        return $this->render('/inscription/enrrolamiento.html.twig');
    }

    /**
     * Creates a form to create a DatoUsuario entity.
     *
     * @param DatoUsuario $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
//    private function createCreateForm(DatoUsuario $entity) {
//        $form = $this->createForm(new DatoUsuarioType(), $entity, array(
//            'action' => $this->generateUrl('datousuario_create'),
//            'method' => 'POST',
//        ));
//
//        $form->add('submit', 'submit', array('label' => 'Create'));
//
//        return $form;
//    }

}
