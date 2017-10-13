<?php

namespace PharmacieDevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use PharmacieDevBundle\Entity\User;


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

    /**
     * Login
     * @Rest\Post("/login")
     */
    public function loginAction(Request $request) {
        $userPayload = json_decode($request->getContent());
        $response = new JsonResponse();
        $user = $this->getDoctrine()->getRepository('PharmacieDevBundle:Users')->findBy(['email' => $userPayload->email, 'password' => md5($userPayload->password)]);
        if (empty($user)){
            $response->setStatusCode(404);
            return $response;
        }
        $user = $user[0];
        $response->setContent(json_encode(['id' => $user->getIdUser()]));
        return $response;
    }
}
