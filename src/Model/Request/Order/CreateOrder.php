<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 31.08.18
 * Time: 11:30
 */

namespace Ginero\GineroPhp\Model\Request\Order;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class CreateOrder
 * @package Ginero\GineroPhp\Model\Request\Order
 */
class CreateOrder
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("type")
     */
    private $type;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cryptoCurrency")
     */
    private $cryptoCurrency;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("fiatCurrency")
     */
    private $fiatCurrency;

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
     * @Serializer\SerializedName("minAmount")
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
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("limitPrice")
     */
    private $limitPrice;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("priceAutoUpdate")
     */
    private $priceAutoUpdate;

    /**
     * @var int
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("premium")
     */
    private $premium;

    /**
     * @var int
     *
     * @Serializer\Type("DateTime")
     * @Serializer\SerializedName("autoCancelTime")
     */
    private $autoCancelTime;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return CreateOrder
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getCryptoCurrency()
    {
        return $this->cryptoCurrency;
    }

    /**
     * @param string $cryptoCurrency
     * @return CreateOrder
     */
    public function setCryptoCurrency($cryptoCurrency)
    {
        $this->cryptoCurrency = $cryptoCurrency;
        return $this;
    }

    /**
     * @return string
     */
    public function getFiatCurrency()
    {
        return $this->fiatCurrency;
    }

    /**
     * @param string $fiatCurrency
     * @return CreateOrder
     */
    public function setFiatCurrency($fiatCurrency)
    {
        $this->fiatCurrency = $fiatCurrency;
        return $this;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return CreateOrder
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinAmount()
    {
        return $this->minAmount;
    }

    /**
     * @param int $minAmount
     * @return CreateOrder
     */
    public function setMinAmount($minAmount)
    {
        $this->minAmount = $minAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     * @return CreateOrder
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitPrice()
    {
        return $this->limitPrice;
    }

    /**
     * @param int $limitPrice
     * @return CreateOrder
     */
    public function setLimitPrice($limitPrice)
    {
        $this->limitPrice = $limitPrice;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPriceAutoUpdate()
    {
        return $this->priceAutoUpdate;
    }

    /**
     * @param bool $priceAutoUpdate
     * @return CreateOrder
     */
    public function setPriceAutoUpdate($priceAutoUpdate)
    {
        $this->priceAutoUpdate = $priceAutoUpdate;
        return $this;
    }

    /**
     * @return int
     */
    public function getPremium()
    {
        return $this->premium;
    }

    /**
     * @param int $premium
     * @return CreateOrder
     */
    public function setPremium($premium)
    {
        $this->premium = $premium;
        return $this;
    }

    /**
     * @return int
     */
    public function getAutoCancelTime()
    {
        return $this->autoCancelTime;
    }

    /**
     * @param int $autoCancelTime
     * @return CreateOrder
     */
    public function setAutoCancelTime($autoCancelTime)
    {
        $this->autoCancelTime = $autoCancelTime;
        return $this;
    }
}