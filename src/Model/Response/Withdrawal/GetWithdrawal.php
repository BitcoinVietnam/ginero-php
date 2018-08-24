<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 24.08.18
 * Time: 17:10
 */

namespace Ginero\GineroPhp\Model\Response\Withdrawal;

use Ginero\GineroPhp\Model\Response\BaseResponse;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class GetWithdrawal
 * @package Ginero\GineroPhp\Model\Response\Withdrawal
 */
class GetWithdrawal extends BaseResponse
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id")
     */
    private $id;

    /**
     * @var integer
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("amount")
     */
    private $amount;

    /**
     * @var integer
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("fee")
     */
    private $fee;

    /**
     * @var integer
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("net_amount")
     */
    private $netAmount;

    /**
     * @var integer
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("crypto_currency")
     */
    private $cryptoCurrency;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("destination")
     */
    private $destination;

    /**
     * @var \DateTime
     *
     * @Serializer\Type("DateTime")
     * @Serializer\SerializedName("created_at")
     */
    private $createdAt;

    /**
     * @var boolean
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("cancelled")
     */
    private $cancelled;

    /**
     * @var boolean
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("completed")
     */
    private $completed;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return GetWithdrawal
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return GetWithdrawal
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return int
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * @param int $fee
     * @return GetWithdrawal
     */
    public function setFee($fee)
    {
        $this->fee = $fee;
        return $this;
    }

    /**
     * @return int
     */
    public function getNetAmount()
    {
        return $this->netAmount;
    }

    /**
     * @param int $netAmount
     * @return GetWithdrawal
     */
    public function setNetAmount($netAmount)
    {
        $this->netAmount = $netAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getCryptoCurrency()
    {
        return $this->cryptoCurrency;
    }

    /**
     * @param int $cryptoCurrency
     * @return GetWithdrawal
     */
    public function setCryptoCurrency($cryptoCurrency)
    {
        $this->cryptoCurrency = $cryptoCurrency;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param string $destination
     * @return GetWithdrawal
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return GetWithdrawal
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCancelled()
    {
        return $this->cancelled;
    }

    /**
     * @param bool $cancelled
     * @return GetWithdrawal
     */
    public function setCancelled($cancelled)
    {
        $this->cancelled = $cancelled;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCompleted()
    {
        return $this->completed;
    }

    /**
     * @param bool $completed
     * @return GetWithdrawal
     */
    public function setCompleted($completed)
    {
        $this->completed = $completed;
        return $this;
    }
}