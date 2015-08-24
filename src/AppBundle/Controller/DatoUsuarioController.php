<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\DatoUsuario;
use AppBundle\Form\DatoUsuarioType;

/**
 * DatoUsuario controller.
 *
 * @Route("/datousuario")
 */
class DatoUsuarioController extends Controller
{

    /**
     * Lists all DatoUsuario entities.
     *
     * @Route("/", name="datousuario")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:DatoUsuario')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new DatoUsuario entity.
     *
     * @Route("/", name="datousuario_create")
     * @Method("POST")
     * @Template("AppBundle:DatoUsuario:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new DatoUsuario();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('datousuario_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a DatoUsuario entity.
     *
     * @param DatoUsuario $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(DatoUsuario $entity)
    {
        $form = $this->createForm(new DatoUsuarioType(), $entity, array(
            'action' => $this->generateUrl('datousuario_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new DatoUsuario entity.
     *
     * @Route("/new", name="datousuario_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new DatoUsuario();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a DatoUsuario entity.
     *
     * @Route("/{id}", name="datousuario_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:DatoUsuario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DatoUsuario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing DatoUsuario entity.
     *
     * @Route("/{id}/edit", name="datousuario_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:DatoUsuario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DatoUsuario entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a DatoUsuario entity.
    *
    * @param DatoUsuario $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(DatoUsuario $entity)
    {
        $form = $this->createForm(new DatoUsuarioType(), $entity, array(
            'action' => $this->generateUrl('datousuario_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing DatoUsuario entity.
     *
     * @Route("/{id}", name="datousuario_update")
     * @Method("PUT")
     * @Template("AppBundle:DatoUsuario:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:DatoUsuario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DatoUsuario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('datousuario_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a DatoUsuario entity.
     *
     * @Route("/{id}", name="datousuario_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:DatoUsuario')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find DatoUsuario entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('datousuario'));
    }

    /**
     * Creates a form to delete a DatoUsuario entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('datousuario_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
