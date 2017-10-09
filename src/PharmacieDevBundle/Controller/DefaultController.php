<?php

namespace PharmacieDevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PharmacieDevBundle:Default:index.html.twig');
    }

    /**
    * Route Get de test
    * @Rest\Get("/")
    */
    public function getTestAction(){
        $test = ["message" => "test"];
        $response = new JsonResponse();
        return $response->setContent(json_encode($test));
    }
}
