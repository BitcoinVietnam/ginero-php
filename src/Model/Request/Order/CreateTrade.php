<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 09.10.18
 * Time: 16:01
 */

namespace Ginero\GineroPhp\Model\Request\Order;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class CreateTrade
 * @package Ginero\GineroPhp\Model\Request\Order
 */
class CreateTrade
{
    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("amount")
     */
    private $amount;

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return CreateTrade
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }
}