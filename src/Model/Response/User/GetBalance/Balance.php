<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 09.10.18
 * Time: 14:45
 */

namespace Ginero\GineroPhp\Model\Response\User\GetBalance;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Balance
 * @package Ginero\GineroPhp\Model\Response\User\GetBalance
 */
class Balance
{
    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("balance")
     */
    private $balance = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("reservedBalance")
     */
    private $reservedBalance = 0;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("availableBalance")
     */
    private $availableBalance = 0;

    /**
     * @return int
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @return int
     */
    public function getReservedBalance()
    {
        return $this->reservedBalance;
    }

    /**
     * @return int
     */
    public function getAvailableBalance()
    {
        return $this->availableBalance;
    }
}