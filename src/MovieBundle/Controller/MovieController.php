<?php

namespace MovieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class MovieController
 * @package MovieBundle\Controller
 * @Route("/movie", name="movie_bundle_movie")
 */
class MovieController extends Controller {

    /**
     * @Route("/", name="movie_bundle_movie_index")
     */
    public function indexAction()
    {

    }

}