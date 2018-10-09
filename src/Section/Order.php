<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 31.08.18
 * Time: 11:35
 */

namespace Ginero\GineroPhp\Section;

use Ginero\GineroPhp\Client;
use Ginero\GineroPhp\Model\Request\Order\CreateOrder;
use Ginero\GineroPhp\Model\Request\Order\CreateTrade;

/**
 * Class Order
 * @package Ginero\GineroPhp\Section
 */
final class Order extends Client
{
    /**
     * Order constructor.
     * @param null|string $apiKey
     * @param null|string $apiSecret
     * @param null|string $apiBaseUri
     */
    public function __construct($apiKey = null, $apiSecret = null, $apiBaseUri = null)
    {
        parent::__construct($apiKey, $apiSecret, $apiBaseUri . '/order');
    }

    /**
     * @param string $type
     * @param string $cryptoCurrency
     * @param string $fiatCurrency
     * @param int $amount
     * @param int|null $price
     * @param int|null $minAmount
     * @param int|null $limitPrice
     * @param bool|null $priceAutoUpdate
     * @param float|null $premium
     * @param \DateTime|null $autoCancelTime
     * @return \Ginero\GineroPhp\Model\Response\Order\CreateOrder
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createOrder(
        $type,
        $cryptoCurrency,
        $fiatCurrency,
        $amount,
        $price = null,
        $minAmount = null,
        $limitPrice = null,
        $priceAutoUpdate = null,
        $premium = null,
        $autoCancelTime = null
    ) {
        $body = $this->serialize(
            (new CreateOrder())
                ->setType($type)
                ->setCryptoCurrency($cryptoCurrency)
                ->setFiatCurrency($fiatCurrency)
                ->setAmount($amount)
                ->setMinAmount($minAmount)
                ->setPrice($price)
                ->setLimitPrice($limitPrice)
                ->setPriceAutoUpdate($priceAutoUpdate)
                ->setPremium($premium)
                ->setAutoCancelTime($autoCancelTime)
        );

        return $this->post($this->apiBaseUri . "/", $body, \Ginero\GineroPhp\Model\Response\Order\CreateOrder::class);
    }

    /**
     * @param string $orderId
     * @param int $amount
     * @return \Ginero\GineroPhp\Model\Response\Order\CreateTrade
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createTrade($orderId, $amount)
    {
        $body = $this->serialize((new CreateTrade())->setAmount($amount));

        return $this->post($this->apiBaseUri . "/$orderId/trades", $body, \Ginero\GineroPhp\Model\Response\Order\CreateTrade::class);
    }
}