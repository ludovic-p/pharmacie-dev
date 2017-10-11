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


}

