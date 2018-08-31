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
     * @param $type
     * @param $cryptoCurrency
     * @param $fiatCurrency
     * @param $amount
     * @param $price
     * @param null $minAmount
     * @param null $limitPrice
     * @param null $priceAutoUpdate
     * @param null $premium
     * @param null $autoCancelTime
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
}