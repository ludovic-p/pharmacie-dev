<?php

namespace PharmacieDevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use PharmacieDevBundle\Entity\Users;


class UserController extends Controller
{

    /**
    * Récupere un utilisateur
    * @Rest\Get("/users/{id}")
    */
    public function getUserAction($id){
        $result = $this->getDoctrine()->getRepository('PharmacieDevBundle:Users')->find($id);
        $response = new JsonResponse();
        $response->setContent($result->__toJson());
        return $response;
    }

    /**
    * Créer un utilisateur
    * @Rest\Post("/users")
    */
    public function createUserAction(Request $request){
        $userPayload = json_decode($request->getContent());

        $data = new Users();
        $data->setEmail($userPayload->email);
        $data->setMdp($userPayload->mdp);
        $data->setNom($userPayload->nom);
        $data->setPrenom($userPayload->prenom);
        $data->setAdresse($userPayload->adresse);
        $data->setCity($userPayload->city);
        $data->setCp($userPayload->cp);
        $data->setTelephone($userPayload->telephone);

        $em = $this->getDoctrine()->getManager();
        $em->persist($data);
        $em->flush();

        $response = new JsonResponse();
        $response->setStatusCode(201);
        return $response;
    }

    /**
    * Supprime un utilisateur
    * @Rest\Delete("/users/{id}")
    */
    public function deleteUserAction($id){
        $data = new Users();
        $user = $this->getDoctrine()->getRepository('PharmacieDevBundle:Users')->find($id);
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($user);
        $manager->flush();
        $response = new JsonResponse();
        $response->setContent(json_encode(["message" => "Utilisateur supprimé"]));
        return $response;
    }
}
