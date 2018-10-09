<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 09.10.18
 * Time: 22:00
 */

namespace Ginero\GineroPhp\Model\Response\Order;

use Ginero\GineroPhp\Model\Response\BaseResponse;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class CreateTrade
 * @package Ginero\GineroPhp\Model\Response\Order
 */
class CreateTrade extends BaseResponse
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id")
     */
    protected $id;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("pair")
     */
    protected $pair;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("amount")
     */
    protected $amount = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("price")
     */
    protected $price = 0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("buyer_fee")
     */
    protected $buyerFee = 0.0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("seller_fee")
     */
    protected $sellerFee = 0.0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("net_crypto_amount")
     */
    protected $netCryptoAmount = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("net_fiat_amount")
     */
    protected $netFiatAmount = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("volume")
     */
    protected $volume = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("volume_usd")
     */
    protected $volumeUsd = 0;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("marked_as_paid")
     */
    protected $markedAsPaid = false;

    /**
     * @var \DateTime
     *
     * @Serializer\Type("DateTime")
     * @Serializer\SerializedName("marked_as_paid_at")
     */
    protected $markedAsPaidAt;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("payment_confirmed")
     */
    protected $paymentConfirmed = false;

    /**
     * @var \DateTime
     *
     * @Serializer\Type("DateTime")
     * @Serializer\SerializedName("payment_confirmed_at")
     */
    protected $paymentConfirmedAt;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("cancelled")
     */
    protected $cancelled = false;

    /**
     * @var \DateTime
     *
     * @Serializer\Type("DateTime")
     * @Serializer\SerializedName("created_at")
     */
    protected $createdAt;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getPair()
    {
        return $this->pair;
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

    /**
     * @return float
     */
    public function getBuyerFee()
    {
        return $this->buyerFee;
    }

    /**
     * @return float
     */
    public function getSellerFee()
    {
        return $this->sellerFee;
    }

    /**
     * @return int
     */
    public function getNetCryptoAmount()
    {
        return $this->netCryptoAmount;
    }

    /**
     * @return int
     */
    public function getNetFiatAmount()
    {
        return $this->netFiatAmount;
    }

    /**
     * @return int
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @return int
     */
    public function getVolumeUsd()
    {
        return $this->volumeUsd;
    }

    /**
     * @return bool
     */
    public function isMarkedAsPaid()
    {
        return $this->markedAsPaid;
    }

    /**
     * @return \DateTime
     */
    public function getMarkedAsPaidAt()
    {
        return $this->markedAsPaidAt;
    }

    /**
     * @return bool
     */
    public function isPaymentConfirmed()
    {
        return $this->paymentConfirmed;
    }

    /**
     * @return \DateTime
     */
    public function getPaymentConfirmedAt()
    {
        return $this->paymentConfirmedAt;
    }

    /**
     * @return bool
     */
    public function isCancelled()
    {
        return $this->cancelled;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}