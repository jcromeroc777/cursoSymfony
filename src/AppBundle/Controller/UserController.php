<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use BackendBundle\Entity\User;
use AppBundle\Services\Helper;
use AppBundle\Services\JwtAuth;

class UserController extends Controller
{
    public function newAction(Request $request)
    {
        $helper = $this->get(Helper::class);

        $json = $request->get("json", null);
        $parameters = json_decode($json);

        $data = array(
            'status' => 'error',
            'code' => 400,
            'msg' => 'User not created'
        );

        if($json != null)
        {
            $createdAt = new \Datetime("now");
            $role = 'user';

            $email = (isset($parameters->email)) ? $parameters->email : null;
            $name = (isset($parameters->name)) ? $parameters->name : null;
            $surname = (isset($parameters->surname)) ? $parameters->surname : null;
            $password = (isset($parameters->password)) ? $parameters->password : null;

            $emailConstraint = new Assert\Email();
            $emailConstraint->message = 'This email is not valid';
            $validateEmail = $this->get('validator')->validate($email, $emailConstraint);

            if($email != null && count($validateEmail) == 0 && $password != null 
                && $name != null && $surname != null )
            {
                $user = new User();
                $user->setCreatedAt($createdAt);
                $user->setRole($role);
                $user->setEmail($email);
                $user->setName($name);
                $user->setSurname($surname);

                //cifrar el password
                $pwd = hash('sha256',$password);
                $user->setPassword($pwd);

                $em = $this->getDoctrine()->getManager();
                $issetUser = $em->getRepository('BackendBundle:User')->findBy(array(
                    "email" => $email
                ));

                if(count($issetUser) == 0)
                {
                    $em->persist($user);
                    $em->flush();

                    $data = array(
                        'status' => 'success',
                        'code' => 200,
                        'msg' => 'New user created',
                        'user' => $user
                    );
                }
                else
                {
                    $data = array(
                        'status' => 'error',
                        'code' => 400,
                        'msg' => 'User duplicated'
                    );
                }
            }
        }

        return $helper->json($data);
    }

    public function editAction(Request $request)
    {
        $helper = $this->get(Helper::class);
        $jwtAuth = $this->get(JwtAuth::class);

        $token = $request->get('authorization', null);
        $authCheck = $jwtAuth->checkToken($token);

        if($authCheck)
        {   
            //Entity manager
            $em = $this->getDoctrine()->getManager();

            //conseguir los datos del usuario identificados por el token
            $identity = $jwtAuth->checkToken($token, true);

            //conseguir el objeto a actualizar
            $user = $em->getRepository('BackendBundle:User')->findOneBy(array(
                "id" => $identity->sub
            ));

            //Recoger datos post
            $json = $request->get("json", null);
            $parameters = json_decode($json);
    
            // array de error por defecto
            $data = array(
                'status' => 'error',
                'code' => 400,
                'msg' => 'User not update1'
            );
    
            if($json != null)
            {
                $createdAt = new \Datetime("now");
                $role = 'user';
    
                $email = (isset($parameters->email)) ? $parameters->email : null;
                $name = (isset($parameters->name)) ? $parameters->name : null;
                $surname = (isset($parameters->surname)) ? $parameters->surname : null;
                $password = (isset($parameters->password)) ? $parameters->password : null;
    
                $emailConstraint = new Assert\Email();
                $emailConstraint->message = 'This email is not valid';
                $validateEmail = $this->get('validator')->validate($email, $emailConstraint);
    
                if($email != null && count($validateEmail) == 0 
                    && $name != null && $surname != null )
                {
                    $user->setCreatedAt($createdAt);
                    $user->setRole($role);
                    $user->setEmail($email);
                    $user->setName($name);
                    $user->setSurname($surname);

                    //cifrar el password
                    if($password != null)
                    {
                        $pwd = hash('sha256',$password);
                        $user->setPassword($pwd);
                    }
    
                    $em = $this->getDoctrine()->getManager();
                    $issetUser = $em->getRepository('BackendBundle:User')->findBy(array(
                        "email" => $email
                    ));
    
                    if(count($issetUser) == 0 || $identity->email == $email)
                    {
                        $em->persist($user);
                        $em->flush();
    
                        $data = array(
                            'status' => 'success',
                            'code' => 200,
                            'msg' => 'User update',
                            'user' => $user
                        );
                    }
                    else
                    {
                        $data = array(
                            'status' => 'error',
                            'code' => 400,
                            'msg' => 'User not update2'
                        );
                    }
                }
            }

        }
        else
        {
            $data = array(
                'status' => 'error',
                'code' => 400,
                'msg' => 'Authorization no valid'
            );
        }

        return $helper->json($data);
    }
}