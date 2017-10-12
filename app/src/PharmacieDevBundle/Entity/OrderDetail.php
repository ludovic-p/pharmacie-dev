<?php

namespace PharmacieDevBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderDetail
 *
 * @ORM\Table(name="order_detail", indexes={@ORM\Index(name="fk_id_order_353", columns={"id_order"}), @ORM\Index(name="fk_id_product_937", columns={"id_product"})})
 * @ORM\Entity
 */
class OrderDetail
{
    /**
    * @var \PharmacieDevBundle\Entity\Orders
    *
    * @ORM\ManyToOne(targetEntity="PharmacieDevBundle\Entity\Orders")
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="id_order", referencedColumnName="id_order")
    * })
    */
    private $idOrder;

    /**
      * @var \PharmacieDevBundle\Entity\Products
      *
      * @ORM\ManyToOne(targetEntity="PharmacieDevBundle\Entity\Products")
      * @ORM\JoinColumns({
      *   @ORM\JoinColumn(name="id_product", referencedColumnName="id_product")
      * })
      */
    private $idProduct;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_order_detail", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrderDetail;

    /**
     * @return int
     */
    public function getIdOrder()
    {
        return $this->idOrder;
    }

    /**
     * @param int $idOrder
     */
    public function setIdOrder($idOrder)
    {
        $this->idOrder = $idOrder;
    }

    /**
     * @return int
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * @param int $idProduct
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return int
     */
    public function getIdOrderDetail()
    {
        return $this->idOrderDetail;
    }

    /**
     * @param int $idOrderDetail
     */
    public function setIdOrderDetail($idOrderDetail)
    {
        $this->idOrderDetail = $idOrderDetail;
    }

    /*
     * Formatage des données en JSON
     */
    public function __toJson(){
        $data = ["id_order_detail" => $this->getIdOrderDetail(),
                 "id_order" => $this->getIdOrder(),
                 "id_product" => $this->getIdProduct(),
                 "quantity" => $this->getQuantity(),
             ];
        return json_encode($data);
    }
}
