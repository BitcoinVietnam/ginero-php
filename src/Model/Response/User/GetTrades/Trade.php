<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 09.10.18
 * Time: 22:49
 */

namespace Ginero\GineroPhp\Model\Response\User\GetTrades;

use Ginero\GineroPhp\Model\Response\Order\CreateTrade;
use Ginero\GineroPhp\Model\Response\User\GetTrades\Trade\User;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Trade
 * @package Ginero\GineroPhp\Model\Response\User\GetTrades
 */
class Trade extends CreateTrade
{
    /**
     * @var User
     *
     * @Serializer\Type("Ginero\GineroPhp\Model\Response\User\GetTrades\Trade\User")
     * @Serializer\SerializedName("buyer")
     */
    private $buyer;

    /**
     * @var User
     *
     * @Serializer\Type("Ginero\GineroPhp\Model\Response\User\GetTrades\Trade\User")
     * @Serializer\SerializedName("seller")
     */
    private $seller;

    /**
     * @return User
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * @return User
     */
    public function getSeller()
    {
        return $this->seller;
    }
}