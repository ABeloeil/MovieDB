<?php

namespace MovieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class DefaultController
 * @package MovieBundle\Controller
 * @Route("/", name="movie_bundle_default")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="movie_bundle_default_index")
     * @Method({"GET"})
     */
    public function indexAction()
    {
        return $this->render(':default:index.html.twig');
    }
}
