<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // default_index
        if ('' === $trimmedPathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_default_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'default_index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'default_index',);
        }
        not_default_index:

        // default_pruebas
        if ('/pruebas' === $pathinfo) {
            if (!in_array($canonicalMethod, array('POST', 'GET'))) {
                $allow = array_merge($allow, array('POST', 'GET'));
                goto not_default_pruebas;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::pruebasAction',  '_route' => 'default_pruebas',);
        }
        not_default_pruebas:

        // default_login
        if ('/login' === $pathinfo) {
            if (!in_array($canonicalMethod, array('POST', 'GET'))) {
                $allow = array_merge($allow, array('POST', 'GET'));
                goto not_default_login;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::loginAction',  '_route' => 'default_login',);
        }
        not_default_login:

        // user_new
        if ('/user/new' === $pathinfo) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_user_new;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
        }
        not_user_new:

        // user_edit
        if ('/user/edit' === $pathinfo) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_user_edit;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\UserController::editAction',  '_route' => 'user_edit',);
        }
        not_user_edit:

        if (0 === strpos($pathinfo, '/task')) {
            // task_new
            if ('/task/new' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_task_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TaskController::newAction',  '_route' => 'task_new',);
            }
            not_task_new:

            // task_edit
            if (0 === strpos($pathinfo, '/task/edit') && preg_match('#^/task/edit(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_task_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_edit')), array (  '_controller' => 'AppBundle\\Controller\\TaskController::newAction',  'id' => NULL,));
            }
            not_task_edit:

            // task_list
            if ('/task/list' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_task_list;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TaskController::tasksAction',  '_route' => 'task_list',);
            }
            not_task_list:

            // task_detail
            if (0 === strpos($pathinfo, '/task/detail') && preg_match('#^/task/detail(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_task_detail;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_detail')), array (  '_controller' => 'AppBundle\\Controller\\TaskController::taskAction',  'id' => NULL,));
            }
            not_task_detail:

            // task_search
            if (0 === strpos($pathinfo, '/task/search') && preg_match('#^/task/search(?:/(?P<search>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_task_search;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_search')), array (  '_controller' => 'AppBundle\\Controller\\TaskController::searchAction',  'search' => NULL,));
            }
            not_task_search:

            // task_remove
            if (0 === strpos($pathinfo, '/task/remove') && preg_match('#^/task/remove(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_task_remove;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_remove')), array (  '_controller' => 'AppBundle\\Controller\\TaskController::removeAction',  'id' => NULL,));
            }
            not_task_remove:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
