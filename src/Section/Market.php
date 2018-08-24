<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 23.08.18
 * Time: 15:22
 */

namespace Ginero\GineroPhp\Section;

use Ginero\GineroPhp\Client;
use Ginero\GineroPhp\Model\Response\CollectionResponse;
use Ginero\GineroPhp\Model\Response\Market\GetOrderbook;
use Ginero\GineroPhp\Model\Response\Market\GetTicker;
use Ginero\GineroPhp\Model\Response\Market\GetTrades;

/**
 * Class Market
 * @package Ginero\GineroPhp\Section
 */
final class Market extends Client
{
    /**
     * Market constructor.
     * @param null|string $apiKey
     * @param null|string $apiSecret
     * @param null|string $apiBaseUri
     */
    public function __construct($apiKey = null, $apiSecret = null, $apiBaseUri = null)
    {
        parent::__construct($apiKey, $apiSecret, $apiBaseUri . '/market');
    }

    /**
     * @param string $pair
     * @return GetOrderbook
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOrderbook($pair)
    {
        return $this->get($this->apiBaseUri . "/$pair/orderbook", GetOrderbook::class);
    }

    /**
     * @param string $pair
     * @return CollectionResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTrades($pair)
    {
        return $this->get($this->apiBaseUri . "/$pair/trades", 'array<' . GetTrades\Trade::class . '>');
    }

    /**
     * @param string $pair
     * @return GetTicker
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTicker($pair)
    {
        return $this->get($this->apiBaseUri . "/$pair/ticker", GetTicker::class);
    }
}