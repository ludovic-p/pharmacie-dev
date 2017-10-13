<?php

namespace PharmacieDevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use PharmacieDevBundle\Entity\Orders;
use PharmacieDevBundle\Entity\Users;


class OrderController extends Controller
{

    /**
    * Route Get de test
    * @Rest\Get("/orders/{id_user}")
    */
    public function getTestAction($id_user){
        $response = new JsonResponse();
        $user = $this->getDoctrine()->getRepository('PharmacieDevBundle:Orders')->findOneBy(array("idUser" => $id_user));
        if (!empty($user)){
            var_dump($user->getUsers()->getIdUser()); die;
            $response->setContent($orders->__toJson());
            return $response;
        }
        $response->setStatusCode(404);
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
