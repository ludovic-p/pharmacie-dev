<?php

namespace PharmacieDevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use PharmacieDevBundle\Entity\User;


class UserController extends Controller
{

    /**
    * Récupere un utilisateur
    * @Rest\Get("/user/{id}")
    */
    public function getUser($id){

    }

    /**
    * Créer un utilisateur
    * @Rest\Post("/user")
    */
    public function createUser(Request $request){
        
    }
}
