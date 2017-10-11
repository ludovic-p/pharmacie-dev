<?php

namespace PharmacieDevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use PharmacieDevBundle\Entity\User;


class ProductsController extends Controller
{
    public function indexAction()
    {
        return $this->render('PharmacieDevBundle:Default:index.html.twig');
    }

    /**
    * Route Get de produits
    * @Rest\Get("/products")
    */
    public function getProductsAction(){
        $test = ["message" => "test"];
        $conn = $this->container->get('database_connection');
        $sql = 'SELECT * FROM products;';
        $rows = $conn->query($sql)->fetchAll();
        $response = new JsonResponse();

        return $response->setContent(json_encode($rows));
    }
}
