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
        $products = $this->get('doctrine.orm.entity_manager')
                ->getRepository('PharmacieDevBundle:Products')
                ->findAll();
        $formatted = [];
        foreach ($products as $product) {
          $formatted[] = [
             'id' => $product->getIdProduct(),
             'name' => $product->getName(),
             'description' => $product->getDescription(),
             'unit_price' => $product->getUnitPrice(),
             'unit_stock' => $product->getUnitStock(),
             'isParapharmacy' => $product->isParapharmacy()
          ];
        }

        return new JsonResponse($formatted);
    }
}
