<?php

namespace MovieBundle\Controller;


use FOS\RestBundle\Controller\FOSRestController;
use MovieBundle\Entity\User;
use FOS\RestBundle\Controller\Annotations\NamePrefix;

/**
 * Class UserController
 */
class UserController extends FOSRestController
{
    private function getRepository()
    {
        return $this->getDoctrine()->getManager()->getRepository('MovieBundle:User');
    }

    public function getUsersAction()
    {
        $users = $this->getRepository()->findAll();
        return $this->handleView($this->view($users));
    }

    public function getUserAction(User $user)
    {
        return $this->handleView($this->view($user));
    }
}