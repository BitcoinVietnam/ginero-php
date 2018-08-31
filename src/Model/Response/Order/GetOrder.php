<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 31.08.18
 * Time: 12:08
 */

namespace Ginero\GineroPhp\Model\Response\Order;

use Ginero\GineroPhp\Model\Response\BaseResponse;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class GetOrder
 * @package Ginero\GineroPhp\Model\Response\Order
 */
class GetOrder extends BaseResponse
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id")
     */
    private $id;

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
     * @Serializer\SerializedName("crypto_currency")
     */
    private $cryptoCurrency;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("fiat_currency")
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
     * @Serializer\SerializedName("tradable_amount")
     */
    private $tradableAmount;

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
     * @Serializer\SerializedName("volume")
     */
    private $volume;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return GetOrder
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return GetOrder
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
     * @return GetOrder
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
     * @return GetOrder
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
     * @return GetOrder
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return int
     */
    public function getTradableAmount()
    {
        return $this->tradableAmount;
    }

    /**
     * @param int $tradableAmount
     * @return GetOrder
     */
    public function setTradableAmount($tradableAmount)
    {
        $this->tradableAmount = $tradableAmount;
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
     * @return GetOrder
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return int
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param int $volume
     * @return GetOrder
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
        return $this;
    }
}