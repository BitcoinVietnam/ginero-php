<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 23.08.18
 * Time: 18:53
 */

namespace Ginero\GineroPhp\Model\Response\Market\GetTrades;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Trade
 * @package Ginero\GineroPhp\Model\Response\Market\GetTrades
 */
class Trade
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @Serializer\Type("DateTime")
     * @Serializer\SerializedName("paymentConfirmedAt")
     */
    private $paymentConfirmedAt;

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
     * @return \DateTime
     */
    public function getPaymentConfirmedAt()
    {
        return $this->paymentConfirmedAt;
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
    public function getPrice()
    {
        return $this->price;
    }
}