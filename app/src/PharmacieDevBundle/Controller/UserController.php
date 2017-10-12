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
        $user = $this->getDoctrine()->getRepository('PharmacieDevBundle:Users')->find($id);
        $response = new JsonResponse();
        if (empty($user)){
            $response->setStatusCode(404);
            return $response;
        }
        if (empty($result)){
            $response->setStatusCode(404);
            return $response;
        }
        $response->setContent($result->__toJson());
        return $response;
    }

    /**
    * Créer un utilisateur
    * @Rest\Post("/users")
    */
    public function createUserAction(Request $request){
        $userPayload = json_decode($request->getContent());
        if(!empty($userPayload->email) && !empty($userPayload->password) &&
           !empty($userPayload->nom) && !empty($userPayload->prenom) &&
           !empty($userPayload->adresse) && !empty($userPayload->city) &&
           !empty($userPayload->cp) && !empty($userPayload->telephone)
        ) {
        $data = new Users();
        $data->setEmail($userPayload->email);
        $data->setPassword($userPayload->password);
        $data->setNom($userPayload->nom);
        $data->setPrenom($userPayload->prenom);
        $data->setAdresse($userPayload->adresse);
        $data->setCity($userPayload->city);
        $data->setCp($userPayload->cp);
        $data->setTelephone($userPayload->telephone);
        $data->setDateCreation(new \Datetime());
        $em = $this->getDoctrine()->getManager();
        $em->persist($data);
        $em->flush();

        $response = new JsonResponse();
        $response->setStatusCode(201);
        return $response;
        } else {
            $response = new JsonResponse();
            $response->setStatusCode(400);
            return $response;
        }
    }

    /**
    * Créer un utilisateur
    * @Rest\Put("/users/{id}")
    */
    public function updateUserAction($id){
        $userPayload = json_decode($request->getContent());

        $data = new Users();
        if(!empty($userPayload->email) && !empty($userPayload->password) &&
           !empty($userPayload->nom) && !empty($userPayload->prenom) &&
           !empty($userPayload->adresse) && !empty($userPayload->city) &&
           !empty($userPayload->cp) && !empty($userPayload->telephone) &&
           !empty($userPayload->ordonnance)
        ) {
            $data->setEmail($userPayload->email);
            $data->setPassword($userPayload->password);
            $data->setNom($userPayload->nom);
            $data->setPrenom($userPayload->prenom);
            $data->setAdresse($userPayload->adresse);
            $data->setCity($userPayload->city);
            $data->setCp($userPayload->cp);
            $data->setTelephone($userPayload->telephone);
            $data->setOrdonnance($userPayload->ordonnance);

            $em = $this->getDoctrine()->getManager();
            $em->persist($data);
            $em->flush();

            $response = new JsonResponse();
            $response->setStatusCode(201);
            return $response;
        } else {
            $response = new JsonResponse();
            $response->setStatusCode(400);
            return $response;
        }
    }
    /**
    * Supprime un utilisateur
    * @Rest\Delete("/users/{id}")
    */
    public function deleteUserAction($id){
        $data = new Users();
        $response = new JsonResponse();
        $user = $this->getDoctrine()->getRepository('PharmacieDevBundle:Users')->find($id);
        if (empty($user)){
            $response->setStatusCode(404);
            return $response;
        }
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($user);
        $manager->flush();
        $response->setContent(json_encode(["message" => "Utilisateur supprimé"]));
        return $response;
    }

    /**
     * Ajouter une ordonnance
     * @Rest\Post("/users/{id}/ordonnance")
     */
    public function addOrdonnanceAction($id, Request $request) {
        $user = $this->getDoctrine()->getRepository('PharmacieDevBundle:Users')->find($id);
        $response = new JsonResponse();
        if (empty($user)){
            $response->setStatusCode(404);
            return $response;
        }
        $response->setContent($user->__toJson());
        return $response;
    }
}
