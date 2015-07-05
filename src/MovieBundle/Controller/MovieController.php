<?php

namespace MovieBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use MovieBundle\Entity\Movie;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\NamePrefix;

/**
 * Class MovieController
 * @package MovieBundle\Controller
 * @NamePrefix("movies_")
 */
class MovieController extends FOSRestController {

    private function getRepository(){
        return $this->getDoctrine()->getManager()->getRepository('MovieBundle:Movie');
    }

    public function allAction()
    {
        $movies = $this->getRepository()->findAll();
        return $this->handleView($this->view($movies),200);
    }

    public function getAction(Movie $movie)
    {
        return $this->handleView($this->view($movie));
    }

    public function postAction(Request $request)
    {
        $movie = new Movie();
        return $this->handleView($this->view($movie));
    }

    public function updateAction(Request $request, Movie $movie)
    {
        return $this->handleView($this->view($movie));
    }

    public function deleteAction(Movie $movie)
    {
        return $this->handleView($this->view($movie));
    }
}