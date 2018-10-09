<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 24.08.18
 * Time: 10:31
 */

namespace Ginero\GineroPhp\Model\Response\Market;

use Ginero\GineroPhp\Model\Response\BaseResponse;
use Ginero\GineroPhp\Model\Response\Market\GetOrderbook\Order;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class GetOrderbook
 * @package Ginero\GineroPhp\Model\Response\Market
 */
final class GetOrderbook extends BaseResponse
{
    /**
     * @var Order[]
     *
     * @Serializer\Type("array<Ginero\GineroPhp\Model\Response\Market\GetOrderbook\Order>")
     * @Serializer\SerializedName("buy")
     */
    private $buyOrders = [];

    /**
     * @var Order[]
     *
     * @Serializer\Type("array<Ginero\GineroPhp\Model\Response\Market\GetOrderbook\Order>")
     * @Serializer\SerializedName("sell")
     */
    private $sellOrders = [];

    /**
     * @return Order[]
     */
    public function getBuyOrders()
    {
        return $this->buyOrders;
    }

    /**
     * @return Order[]
     */
    public function getSellOrders()
    {
        return $this->sellOrders;
    }
}