<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // rest_dumbledarapi_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_dumbledarapi_default_index')), array (  '_controller' => 'Rest\\DumbledarApiBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/calendar')) {
            // calendar
            if (rtrim($pathinfo, '/') === '/calendar') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_calendar;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'calendar');
                }

                return array (  '_controller' => 'Rest\\DumbledarApiBundle\\Controller\\calendarController::indexAction',  '_route' => 'calendar',);
            }
            not_calendar:

            // calendar_create
            if ($pathinfo === '/calendar/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_calendar_create;
                }

                return array (  '_controller' => 'Rest\\DumbledarApiBundle\\Controller\\calendarController::createAction',  '_route' => 'calendar_create',);
            }
            not_calendar_create:

            // calendar_new
            if ($pathinfo === '/calendar/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_calendar_new;
                }

                return array (  '_controller' => 'Rest\\DumbledarApiBundle\\Controller\\calendarController::newAction',  '_route' => 'calendar_new',);
            }
            not_calendar_new:

            // calendar_show
            if (preg_match('#^/calendar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_calendar_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar_show')), array (  '_controller' => 'Rest\\DumbledarApiBundle\\Controller\\calendarController::showAction',));
            }
            not_calendar_show:

            // calendar_edit
            if (preg_match('#^/calendar/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_calendar_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar_edit')), array (  '_controller' => 'Rest\\DumbledarApiBundle\\Controller\\calendarController::editAction',));
            }
            not_calendar_edit:

            // calendar_update
            if (preg_match('#^/calendar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_calendar_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar_update')), array (  '_controller' => 'Rest\\DumbledarApiBundle\\Controller\\calendarController::updateAction',));
            }
            not_calendar_update:

            // calendar_delete
            if (preg_match('#^/calendar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_calendar_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar_delete')), array (  '_controller' => 'Rest\\DumbledarApiBundle\\Controller\\calendarController::deleteAction',));
            }
            not_calendar_delete:

        }

        if (0 === strpos($pathinfo, '/event')) {
            // event
            if (rtrim($pathinfo, '/') === '/event') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_event;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'event');
                }

                return array (  '_controller' => 'Rest\\DumbledarApiBundle\\Controller\\eventController::indexAction',  '_route' => 'event',);
            }
            not_event:

            // event_create
            if ($pathinfo === '/event/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_event_create;
                }

                return array (  '_controller' => 'Rest\\DumbledarApiBundle\\Controller\\eventController::createAction',  '_route' => 'event_create',);
            }
            not_event_create:

            // event_new
            if ($pathinfo === '/event/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_event_new;
                }

                return array (  '_controller' => 'Rest\\DumbledarApiBundle\\Controller\\eventController::newAction',  '_route' => 'event_new',);
            }
            not_event_new:

            // event_edit
            if (preg_match('#^/event/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_event_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_edit')), array (  '_controller' => 'Rest\\DumbledarApiBundle\\Controller\\eventController::editAction',));
            }
            not_event_edit:

            // event_update
            if (preg_match('#^/event/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_event_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_update')), array (  '_controller' => 'Rest\\DumbledarApiBundle\\Controller\\eventController::updateAction',));
            }
            not_event_update:

            // event_delete
            if (preg_match('#^/event/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_event_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_delete')), array (  '_controller' => 'Rest\\DumbledarApiBundle\\Controller\\eventController::deleteAction',));
            }
            not_event_delete:

        }

        // rest_dumbledarapi_eventrest_showevents
        if (preg_match('#^/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_rest_dumbledarapi_eventrest_showevents;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_dumbledarapi_eventrest_showevents')), array (  '_controller' => 'Rest\\DumbledarApiBundle\\Controller\\eventRestController::showEventsAction',));
        }
        not_rest_dumbledarapi_eventrest_showevents:

        // event_show
        if (preg_match('#^/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_show')), array (  '_controller' => 'Rest\\DumbledarApiBundle\\Controller\\eventRestController::showEventsAction',));
        }

        if (0 === strpos($pathinfo, '/rest')) {
            // get_calendars
            if (0 === strpos($pathinfo, '/rest/calendars') && preg_match('#^/rest/calendars(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_calendars;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_calendars')), array (  '_controller' => 'Rest\\DumbledarApiBundle\\Controller\\calendarRestController::getCalendarsAction',  '_format' => 'json',));
            }
            not_get_calendars:

            // show_events
            if (preg_match('#^/rest/(?P<id>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_show_events;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_events')), array (  '_controller' => 'Rest\\DumbledarApiBundle\\Controller\\eventRestController::showEventsAction',  '_format' => 'json',));
            }
            not_show_events:

            // get_events
            if (0 === strpos($pathinfo, '/rest/events') && preg_match('#^/rest/events(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_events;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_events')), array (  '_controller' => 'Rest\\DumbledarApiBundle\\Controller\\eventRestController::getEventsAction',  '_format' => 'json',));
            }
            not_get_events:

            // get_user
            if (0 === strpos($pathinfo, '/rest/users') && preg_match('#^/rest/users/(?P<event>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_user')), array (  '_controller' => 'Rest\\DumbledarApiBundle\\Controller\\eventRestController::getUserAction',  '_format' => 'json',));
            }
            not_get_user:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
