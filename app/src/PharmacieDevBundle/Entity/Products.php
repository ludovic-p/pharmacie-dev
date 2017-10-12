<?php

namespace PharmacieDevBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="products")
 * @ORM\Entity
 */
class Products
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="unit_price", type="integer", nullable=false)
     */
    private $unitPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="unit_stock", type="integer", nullable=false)
     */
    private $unitStock;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_parapharmacy", type="boolean", nullable=false)
     */
    private $isParapharmacy;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_product", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduct;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @param int $unitPrice
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * @return int
     */
    public function getUnitStock()
    {
        return $this->unitStock;
    }

    /**
     * @param int $unitStock
     */
    public function setUnitStock($unitStock)
    {
        $this->unitStock = $unitStock;
    }

    /**
     * @return bool
     */
    public function isParapharmacy()
    {
        return $this->isParapharmacy;
    }

    /**
     * @param bool $isParapharmacy
     */
    public function setIsParapharmacy($isParapharmacy)
    {
        $this->isParapharmacy = $isParapharmacy;
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

    /*
     * Formatage des données en JSON
     */
    public function __toJson(){
        $data = ["id_product" => $this->getIdProduct(),
                 "name" => $this->getName(),
                 "description" => $this->getDescription(),
                 "unit_stock" => $this->getUnitStock(),
                 "unit_price" => $this->getUnitPrice(),
                 "ordonnance" => $this->getOrdonnance()
             ];
        return json_encode($data);
    }

}
