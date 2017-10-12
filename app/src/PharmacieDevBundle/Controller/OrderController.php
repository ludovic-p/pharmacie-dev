<?php

namespace PharmacieDevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use PharmacieDevBundle\Entity\User;


class OrderController extends Controller
{
    public function indexAction()
    {
        return $this->render('PharmacieDevBundle:Default:index.html.twig');
    }

    /**
    * Route Get de test
    * @Rest\Get("orders/{id_product}")
    */
    public function getTestAction($id_product){
        $response = new JsonResponse();
        $user = $this->getDoctrine()->getRepository('PharmacieDevBundle:Orders')->find($id_product);
        if (empty($user)){
            $response->setStatusCode(404);
            return $response;
        }
        $response->setContent($result->__toJson());
        return $response;
    }

    /**
    * Route Get de test
    * @Rest\Post("/login")
    */
    public function postLoginAction(Request $request) {
      $data = [
        "message" => "",
        "data" => ""
      ];
      $body = json_decode($request->getContent(), true);
      $response = new JsonResponse();
      return $response->setContent(json_encode($body));
    }
}
