<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 09.10.18
 * Time: 14:37
 */

namespace Ginero\GineroPhp\Section;

use Ginero\GineroPhp\Client;
use Ginero\GineroPhp\Model\Response\CollectionResponse;
use Ginero\GineroPhp\Model\Response\User\GetBalance;
use Ginero\GineroPhp\Model\Response\User\GetTrades;

/**
 * Class User
 * @package Ginero\GineroPhp\Section
 */
final class User extends Client
{
    /**
     * User constructor.
     * @param null|string $apiKey
     * @param null|string $apiSecret
     * @param null|string $apiBaseUri
     */
    public function __construct($apiKey = null, $apiSecret = null, $apiBaseUri = null)
    {
        parent::__construct($apiKey, $apiSecret, $apiBaseUri . '/user');
    }

    /**
     * @return CollectionResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getBalance()
    {
        return $this->get($this->apiBaseUri . "/balance", 'array<string, ' . GetBalance\Balance::class . '>');
    }

    /**
     * @param string $cryptoCurrency
     * @return CollectionResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTrades($cryptoCurrency)
    {
        return $this->get($this->apiBaseUri . "/trades?cryptoCurrency=$cryptoCurrency", 'array<' . GetTrades\Trade::class . '>');
    }
}