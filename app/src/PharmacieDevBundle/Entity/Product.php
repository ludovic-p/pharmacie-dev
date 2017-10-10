<?php
namespace PharmacieDevBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="products")
 */
class Product
{

    /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue
   */
    public $id_product;

    /**
     * @ORM\Column(type="string")
     */
    public $name;

    /**
     * @ORM\Column(type="text")
     */
    public $description;

    /**
     * @ORM\Column(type="integer")
     */
    public $unit_price;

    /**
     * @ORM\Column(type="integer")
     */
    public $unit_stock;

    /**
     * @ORM\Column(type="boolean")
     */
    public $is_parapharmacy;

    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getIdProduct()
    {
        return $this->id_product;
    }

    /**
     * @param mixed $id_product
     */
    public function setIdProduct($id_product)
    {
        $this->id_product = $id_product;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getUnitPrice()
    {
        return $this->unit_price;
    }

    /**
     * @param mixed $unit_price
     */
    public function setUnitPrice($unit_price)
    {
        $this->unit_price = $unit_price;
    }

    /**
     * @return mixed
     */
    public function getUnitStock()
    {
        return $this->unit_stock;
    }

    /**
     * @param mixed $unit_stock
     */
    public function setUnitStock($unit_stock)
    {
        $this->unit_stock = $unit_stock;
    }

    /**
     * @return mixed
     */
    public function getisParapharmacy()
    {
        return $this->is_parapharmacy;
    }

    /**
     * @param mixed $is_parapharmacy
     */
    public function setIsParapharmacy($is_parapharmacy)
    {
        $this->is_parapharmacy = $is_parapharmacy;
    }
    
}
