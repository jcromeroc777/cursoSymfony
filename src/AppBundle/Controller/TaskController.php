<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use BackendBundle\Entity\Task;
use AppBundle\Services\Helper;
use AppBundle\Services\JwtAuth;

class TaskController extends Controller
{
    public function newAction(Request $request, $id = null)
    {
        $helper = $this->get(Helper::class);
        $jwtAuth = $this->get(JwtAuth::class);

        $token = $request->get('authorization', null);
        $authCheck = $jwtAuth->checkToken($token);

        if($authCheck)
        {
            $identity = $jwtAuth->checkToken($token, true);
            $json = $request->get("json", null);

            if($json != null)
            {
                $parameters = json_decode($json);

                $createdAt = new \Datetime('now');
                $updatedAt = new \Datetime('now');

                $user_id = ($identity->sub != null) ? $identity->sub : null;
                $title = (isset($parameters->title)) ? $parameters->title : null;
                $description = (isset($parameters->description)) ? $parameters->description : null;
                $status = (isset($parameters->status)) ? $parameters->status : null;

                if($user_id != null && $title != null)
                {
                    // crear tarea
                    $em = $this->getDoctrine()->getManager();

                    $user = $em->getRepository('BackendBundle:User')->findOneBy(array(
                        "id" => $user_id
                    ));

                    if($id == null)
                    {
                        $task = new Task();
                        $task->setUser($user);
                        $task->setTitle($title);
                        $task->setDescription($description);
                        $task->setStatus($status);
                        $task->setCreatedAt($createdAt);
                        $task->setUpdatedAt($updatedAt);

                        $em->persist($task);
                        $em->flush();
    
                        $data = array(
                            'status' => 'success',
                            'code' => 200,
                            'data' => $task
                        );
                    }
                    else
                    {
                        $task = $em->getRepository('BackendBundle:Task')->findOneBy(array(
                            'id' => $id
                        ));

                        if(isset($identity->sub) && $identity->sub == $task->getUser()->getId())
                        {

                            $task->setTitle($title);
                            $task->setDescription($description);
                            $task->setStatus($status);
                            $task->setUpdatedAt($updatedAt);

                            $em->persist($task);
                            $em->flush();

                            $data = array(
                                'status' => 'success',
                                'code' => 200,
                                'data' => $task
                            );
                        }
                        else
                        {
                            $data = array(
                                'status' => 'error',
                                'code' => 400,
                                'msg' => 'Task update error, you not owner'
                            );
                        }
                    }
                }
                else
                {
                    $data = array(
                        'status' => 'error',
                        'code' => 400,
                        'msg' => 'Task not created, validation failed'
                    );

                }

            }
            else
            {
                $data = array(
                    'status' => 'error',
                    'code' => 400,
                    'msg' => 'Task not created, parameters failed'
                );
            }
        }
        else
        {
            $data = array(
                'status' => 'error',
                'code' => 400,
                'msg' => 'Athorization not valid'
            );
        }

        return $helper->json($data);
    }

    public function tasksAction(Request $request)
    {
        $helper = $this->get(Helper::class);
        $jwtAuth = $this->get(JwtAuth::class);

        $token = $request->get('authorization', null);
        $authCheck = $jwtAuth->checkToken($token);

        if($authCheck)
        {
            $identity = $jwtAuth->checkToken($token, true);

            $em = $this->getDoctrine()->getManager();

            $dql = "SELECT t FROM BackendBundle:Task t WHERE t.user = {$identity->sub} ORDER BY t.id DESC"; 
            $query = $em->createQuery($dql);

            $page = $request->query->getInt('page',1);
            $paginator = $this->get('knp_paginator');
            $itemsPerPage = 10;

            $pagination = $paginator->paginate($query, $page, $itemsPerPage);
            $totalItemsCount = $pagination->getTotalItemCount();

            $data = array(
                'status' => 'success',
                'code' => 200,
                'totalItemsCount' => $totalItemsCount,
                'pageActual' => $page,
                'itemPerPage' => $itemsPerPage,
                'totalPages' => ceil($totalItemsCount / $itemsPerPage),
                'data' => $pagination
            );
        }
        else
        {
            $data = array(
                'status' => 'error',
                'code' => 400,
                'msg' => 'Athorization not valid'
            );

        }

        return $helper->json($data); 
    }

    public function taskAction(Request $request, $id = null)
    {
        $helper = $this->get(Helper::class);
        $jwtAuth = $this->get(JwtAuth::class);

        $token = $request->get('authorization', null);
        $authCheck = $jwtAuth->checkToken($token);

        if($authCheck)
        {
            $identity = $jwtAuth->checkToken($token, true);
            
            $em = $this->getDoctrine()->getManager();

            $task = $em->getRepository('BackendBundle:Task')->findOneBy(array(
                'id' => $id        
            ));

            if($task && is_object($task) && $identity->sub == $task->getUser()->getId())
            {
                $data = array(
                    'status' => 'success',
                    'code' => 200,
                    'data' => $task
                ); 
            }
            else
            {
                $data = array(
                    'status' => 'error',
                    'code' => 400,
                    'msg' => 'Task not found'
                );

            }
            
        }
        else
        {
            $data = array(
                'status' => 'error',
                'code' => 400,
                'msg' => 'Athorization not valid'
            );
        }

        return $helper->json($data);
    }
    
    public function searchAction(Request $request, $search = null)
    {
        $helper = $this->get(Helper::class);
        $jwtAuth = $this->get(JwtAuth::class);

        $token = $request->get('authorization', null);
        $authCheck = $jwtAuth->checkToken($token);

        if($authCheck)
        {
            $identity = $jwtAuth->checkToken($token, true);
            
            $em = $this->getDoctrine()->getManager();

            //Filtro
            $filter = $request->get('filter', null);

            if(empty($filter))
                $filter = null;
            elseif($filter == 1)
                $filter = 'new';
            elseif($filter == 2)
                $filter = 'todo';
            else
                $filter = 'finished';

            //Orden
            $order = $request->get('order', null);
            
            if(empty($order) || $order == 2)
                $order = 'DESC';
            else
                $order = 'ASC';

            //Busqueda
            if($search != null)
            {   
                $dql = "SELECT t FROM BackendBundle:Task t"
                        ." WHERE t.user = $identity->sub AND"
                        ." (t.title LIKE :search OR t.description LIKE :search)"; 
            }
            else
            {
                $dql = "SELECT t FROM BackendBundle:Task t"
                        ." WHERE t.user = $identity->sub";

                if($filter != null)
                    $dql .= " AND t.status = :filter";
            }

            //Ser filter
            if($filter != null)
                $dql .= " AND t.status = :filter";

            //Set order
            $dql .= " ORDER BY t.id $order";

            // Create query
            $query = $em->createQuery($dql);

            //Set parameter filter
            if($filter != null)
                $query->setParameter('filter', "$filter");
            
            //Set parameter search
            if(!empty($search))
                $query->setParameter('search', "%$search%");

            $tasks = $query->getResult();

            $data = array(
                'status' => 'success',
                'code' => 200,
                'data' => $tasks
            ); 
        }
        else
        {
            $data = array(
                'status' => 'error',
                'code' => 400,
                'msg' => 'Athorization not valid'
            );
        }

        return $helper->json($data);
    }

    public function removeAction(Request $request, $id = null)
    {
        $helper = $this->get(Helper::class);
        $jwtAuth = $this->get(JwtAuth::class);

        $token = $request->get('authorization', null);
        $authCheck = $jwtAuth->checkToken($token);

        if($authCheck)
        {
            $identity = $jwtAuth->checkToken($token, true);
            
            $em = $this->getDoctrine()->getManager();

            $task = $em->getRepository('BackendBundle:Task')->findOneBy(array(
                'id' => $id        
            ));

            if($task && is_object($task) && $identity->sub == $task->getUser()->getId())
            {
                //Borrar objeto y borrar registro de la tabla
                $em->remove($task);
                $em->flush();

                $data = array(
                    'status' => 'success',
                    'code' => 200,
                    'data' => $task
                ); 
            }
            else
            {
                $data = array(
                    'status' => 'error',
                    'code' => 400,
                    'msg' => 'Task not found'
                );

            }
            
        }
        else
        {
            $data = array(
                'status' => 'error',
                'code' => 400,
                'msg' => 'Athorization not valid'
            );
        }

        return $helper->json($data);
    }
}