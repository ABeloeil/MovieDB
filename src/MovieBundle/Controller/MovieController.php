<?php

namespace MovieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class MovieController
 * @package MovieBundle\Controller
 * @Route("/movie", name="movie_bundle_movie")
 */
class MovieController extends Controller {

    /**
     * @Route("/", name="movie_bundle_movie_index")
     * @Method({"GET"})
     */
    public function indexAction()
    {
        return $this->render(':movie:index.html.twig');
    }

    /**
     * @Route("/add", name="movie_bundle_movie_add")
     * @Method({"GET", "POST"})
     */
    public function addAction(Request $request)
    {
        return $this->render(':movie:add.html.twig');
    }

    /**
     * @Route("/{id}/edit", name="movie_bundle_movie_edit", requirements={"id"="\d+"})
     * @Method({"GET","POST"})
     */
    public function editAction(Request $request, Movie $movie)
    {
        return $this->render(':movie:edit.html.twig',[
            'movie' => $movie,
        ]);
    }

    /**
     * @Route("/{id}/delete", name="movie_bundle_movie_delete", requirements={"id"="\d+"})
     * @Method({"GET","POST"})
     */
    public function deleteAction(Request $request, Movie $movie)
    {
        return $this->render(':movie:delete.html.twig',[
            'movie' => $movie,
        ]);
    }
}