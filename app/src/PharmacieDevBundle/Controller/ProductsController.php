<?php

namespace PharmacieDevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use PharmacieDevBundle\Entity\Products;


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
             'image' => $product->getImage(),
             'description' => $product->getDescription(),
             'unit_price' => $product->getUnitPrice(),
             'unit_stock' => $product->getUnitStock(),
             'ordonnance' => $product->isOrdonnance()
          ];
        }

        return new JsonResponse($formatted);
    }

    /**
    * Créer un produit
    * @Rest\Post("/products")
    */
    public function createProductAction(Request $request){
        $response = new JsonResponse();
        $productPayload = json_decode($request->getContent());
        if (!empty($productPayload->name) && !empty($productPayload->image)
        && !empty($productPayload->description) && !empty($productPayload->unit_price)
        && !empty($productPayload->unit_stock) && !empty($productPayload->ordonnance)){
          $data = new Products();
          $data->setName($productPayload->name);
          $data->setImage($productPayload->image);
          $data->setDescription($productPayload->description);
          $data->setUnitPrice($productPayload->unit_price);
          $data->setUnitStock($productPayload->unit_stock);
          $data->setOrdonnance($productPayload->ordonnance);
          $em = $this->getDoctrine()->getManager();
          $em->persist($data);
          $em->flush();

          $response->setStatusCode(201);
          return $response;
      } else {
          $response->setStatusCode(400);
          return $response;
      }
    }

    /**
    * Supprime un produit
    * @Rest\Delete("/products/{id}")
    */
    public function deleteUserAction($id){
        $response = new JsonResponse();
        $data = new Products();
        $product = $this->getDoctrine()->getRepository('PharmacieDevBundle:Products')->find($id);
        if (empty($product)){
            $response->setStatusCode(404);
            return $response;
        }
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($product);
        $manager->flush();
        $response->setContent(json_encode(["message" => "Produit supprimé"]));
        return $response;
    }
}
