<?php

namespace Rest\DumbledarApiBundle\Controller;


use Rest\DumbledarApiBundle\Entity\event;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use FOS\RestBundle\Controller\Annotations\Get;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class eventRestController extends Controller
{


    /**
     * Finds and displays a calendar entity.
     *
     * @return array
     * @View()
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
     * @param Event $event
     * @return array
     * @View()
     * @ParamConverter("calendar", class="RestDumbledarApiBundle:Calendar")
     */
    public function getUserAction(Event $event)
    {
        return array('Event' => $event);
    }


}
