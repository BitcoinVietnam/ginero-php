<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 24.08.18
 * Time: 20:12
 */

namespace Ginero\GineroPhp\Model\Response\Deposit;

use Ginero\GineroPhp\Model\Response\BaseResponse;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class GetDeposit
 * @package Ginero\GineroPhp\Model\Response\Deposit
 */
final class GetDeposit extends BaseResponse
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
     * @Serializer\SerializedName("amount")
     */
    private $amount;

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
     * @Serializer\SerializedName("address")
     */
    private $address;

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
     * @Serializer\SerializedName("completed")
     */
    private $completed;

    /**
     * @var \DateTime
     *
     * @Serializer\Type("DateTime")
     * @Serializer\SerializedName("completedAt")
     */
    private $completedAt;

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
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCryptoCurrency()
    {
        return $this->cryptoCurrency;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return bool
     */
    public function isCompleted()
    {
        return $this->completed;
    }

    /**
     * @return \DateTime
     */
    public function getCompletedAt()
    {
        return $this->completedAt;
    }
}