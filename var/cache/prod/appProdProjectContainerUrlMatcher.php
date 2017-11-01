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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
