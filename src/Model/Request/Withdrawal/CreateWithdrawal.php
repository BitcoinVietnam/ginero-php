<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 24.08.18
 * Time: 15:32
 */

namespace Ginero\GineroPhp\Model\Request\Withdrawal;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class CreateWithdrawal
 * @package Ginero\GineroPhp\Model\Request\Withdrawal
 */
class CreateWithdrawal
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cryptoCurrency")
     */
    private $cryptoCurrency;

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
     * @Serializer\SerializedName("destination")
     */
    private $destination;

    /**
     * @return string
     */
    public function getCryptoCurrency()
    {
        return $this->cryptoCurrency;
    }

    /**
     * @param string $cryptoCurrency
     * @return CreateWithdrawal
     */
    public function setCryptoCurrency($cryptoCurrency)
    {
        $this->cryptoCurrency = $cryptoCurrency;
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
     * @return CreateWithdrawal
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
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
     * @return CreateWithdrawal
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
        return $this;
    }
}