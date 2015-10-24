<?php

namespace Rest\DumbledarApiBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Rest\DumbledarApiBundle\Entity\calendar;
use Rest\DumbledarApiBundle\Form\calendarType;

/**
 * calendar controller.
 *
 * @Route("/calendar")
 */
class calendarController extends Controller
{

    /**
     * Lists all calendar entities.
     *
     * @Route("/", name="calendar")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RestDumbledarApiBundle:calendar')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new calendar entity.
     *
     * @Route("/", name="calendar_create")
     * @Method("POST")
     * @Template("RestDumbledarApiBundle:calendar:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new calendar();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('calendar_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a calendar entity.
     *
     * @param calendar $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(calendar $entity)
    {
        $form = $this->createForm(new calendarType(), $entity, array(
            'action' => $this->generateUrl('calendar_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new calendar entity.
     *
     * @Route("/new", name="calendar_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new calendar();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a calendar entity.
     *
     * @Route("/{id}", name="calendar_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RestDumbledarApiBundle:calendar')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find calendar entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing calendar entity.
     *
     * @Route("/{id}/edit", name="calendar_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RestDumbledarApiBundle:calendar')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find calendar entity.');
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
    * Creates a form to edit a calendar entity.
    *
    * @param calendar $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(calendar $entity)
    {
        $form = $this->createForm(new calendarType(), $entity, array(
            'action' => $this->generateUrl('calendar_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing calendar entity.
     *
     * @Route("/{id}", name="calendar_update")
     * @Method("PUT")
     * @Template("RestDumbledarApiBundle:calendar:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RestDumbledarApiBundle:calendar')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find calendar entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('calendar_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a calendar entity.
     *
     * @Route("/{id}", name="calendar_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RestDumbledarApiBundle:calendar')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find calendar entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('calendar'));
    }

    /**
     * Creates a form to delete a calendar entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('calendar_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
