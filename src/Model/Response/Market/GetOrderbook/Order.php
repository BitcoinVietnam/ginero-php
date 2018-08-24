<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 24.08.18
 * Time: 10:32
 */

namespace Ginero\GineroPhp\Model\Response\Market\GetOrderbook;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Order
 * @package Ginero\GineroPhp\Model\Response\Market\GetOrderbook
 */
class Order
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id")
     */
    private $id;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("tradable_amount")
     */
    private $tradableAmount;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("amount")
     */
    private $amount;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("min_amount")
     */
    private $minAmount;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("price")
     */
    private $price;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getTradableAmount()
    {
        return $this->tradableAmount;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return int
     */
    public function getMinAmount()
    {
        return $this->minAmount;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }
}