<?php

namespace Rest\DumbledarApiBundle\Controller;


use Rest\DumbledarApiBundle\Entity\event;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use FOS\RestBundle\Controller\Annotations\Get;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\FOSRestController;
use Rest\DumbledarApiBundle\Form\eventType;
use FOS\RestBundle\Form\Extension\DisableCSRFExtension;
//use FOS\RestBundle\Decoder\DecoderInterface;

class eventRestController extends FOSRestController
{


    /**
     * Finds and displays a calendar entity.
     *
     * @return array
     * @View()
     * @ApiDoc()
     */
    public function getEventsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RestDumbledarApiBundle:event')->findAll();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find calendar entity.');
        }

        return array('events' => $entity);
    }

    /**
     * Finds and displays a calendar entity by id.
     *
     * @return array
     * @View()
     * @ApiDoc(
     *  description="Returns events by id",
     * )
     */
    public function getEventAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RestDumbledarApiBundle:event')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find calendar entity.');
        }

        return array('events' => $entity);
    }


    /**
     * Deletes a event entity.
     *
     * @return boolean
     * @View()
     * @ApiDoc(
     *  description="Delete events by id",
     * )
     */
    public function deleteAction($id)
    {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RestDumbledarApiBundle:event')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find event entity.');
                return false;
            }

            $em->remove($entity);
            $em->flush();


        return true;
    }

    /**
     * Creates a new event entity.
     *
     * @var Request $request
     * @return View|array
     * @View()
     * @ApiDoc(
     *  description="create event",
     * )
     */
    public function postEventAction(Request $request)
    {
        $entity = new event();
        $form = $this->createForm(new eventType(), $entity);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirectView(
                $this->generateUrl(
                    'get_event',
                    array('id' => $entity->getId())
                ),
                Codes::HTTP_CREATED
            );
        }

        return array(
            'form' => $form,
        );

    }






}
