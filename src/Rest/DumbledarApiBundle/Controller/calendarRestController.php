<?php

namespace Rest\DumbledarApiBundle\Controller;


use Rest\DumbledarApiBundle\Entity\calendar;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;


class calendarRestController extends Controller
{


    /**
     * Finds and displays a calendar entity.
     *
     * @return array
     * @View()
     */
    public function getCalendarsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RestDumbledarApiBundle:calendar')->findAll();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find calendar entity.');
        }

        return array('calendar' => $entity);
    }

    /**
     * @param Calendar $calendar
     * @return array
     * @View()
     * @ParamConverter("calendar", class="RestDumbledarApiBundle:Calendar")
     */
    public function getUserAction(Calendar $calendar)
    {
        return array('calendar' => $calendar);
    }


}
