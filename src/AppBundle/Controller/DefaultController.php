<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Services\Helper;
use AppBundle\Services\JwtAuth;
use Symfony\Component\Validator\Constraints as Assert;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    public function loginAction(Request $request)
    {
        $helper = $this->get(Helper::class);

        //Recibir json por POST
        $json = $request->get('json',null);

        //array devolver por defecto
        $data = array(
            'status' => 'error',
            'data' => 'Send json via POST'
        );

        if($json != null)
        {
            //Convertimos un objeto de php
            $paramenters = json_decode($json);

            $email = (isset($paramenters->email)) ? $paramenters->email : null;
            $password = (isset($paramenters->password)) ? $paramenters->password : null;
            $getHash = (isset($paramenters->getHash)) ? $paramenters->getHash : null;

            $emailConstraint = new Assert\Email();
            $emailConstraint->message = 'This email is not valid';
            $validateEmail = $this->get('validator')->validate($email, $emailConstraint);

            if($email != null && count($validateEmail) == 0 && $password != null)
            {
                $jwtAuth = $this->get(JwtAuth::class);

                if($getHash == null || $getHash == false)
                    $singup = $jwtAuth->signup($email, $password, null);
                else
                    $singup = $jwtAuth->signup($email, $password, true);

                //se hace el login
                return $this->json($singup);
            }
            else
            {
                //se rechaza el login
                $data = array(
                'status' => 'error',
                'data' => 'Email or password incorrect'
            );
            }
        }
        else
        {
            // json es nulo
            $data = array(
                'status' => 'error',
                'data' => 'Json is empty'
            );
        }

        return $helper->json($data);
    }

    public function pruebasAction(Request $request)
    {
        $token = $request->get('authorization', null);
        $helpers = $this->get(Helper::class);
        $jwtAuth = $this->get(JwtAuth::class);

        if($token && $jwtAuth->checkToken($token) == true)
        {
            $em = $this->getDoctrine()->getManager();
            $userRepo = $em->getRepository('BackendBundle:User');
            $users = $userRepo->findAll();

            return $helpers->json(array(
                    'status' => 'success',
                    'users' => $users
            ));
        }
        else
        {
            return $helpers->json(array(
                'status' => 'error',
                'code' => 400,
                'data' => 'Authorization not valid'
            )); 
        }

        /*die();

        return $this->json(array(
            'status' => 'success',
            'user' => $users[0]->getName()
        ));*/
    }

}
