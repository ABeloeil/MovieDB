<?php

namespace MovieBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use MovieBundle\Entity\Movie;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\NamePrefix;

/**
 * Class MovieController
 * @package MovieBundle\Controller
 */
class MovieController extends FOSRestController {

    private function getRepository(){
        return $this->getDoctrine()->getManager()->getRepository('MovieBundle:Movie');
    }

    public function getMoviesAction()
    {
        $movies = $this->getRepository()->findAll();
        return $this->handleView($this->view($movies),200);
    }

    public function getMovieAction(Movie $movie)
    {
        return $this->handleView($this->view($movie));
    }

    public function postMovieAction(Request $request)
    {
        $movie = new Movie();
        return $this->handleView($this->view($movie));
    }

    public function updateMovieAction(Request $request, Movie $movie)
    {
        return $this->handleView($this->view($movie));
    }

    public function deleteMovieAction(Movie $movie)
    {
        return $this->handleView($this->view($movie));
    }
}