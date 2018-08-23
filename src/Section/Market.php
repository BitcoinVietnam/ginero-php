<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 23.08.18
 * Time: 15:22
 */

namespace Ginero\GineroPhp\Section;

use Ginero\GineroPhp\Client;

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
        parent::__construct($apiKey, $apiSecret, "$apiBaseUri/market");
    }

    /**
     * @param string $pair
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTicker($pair)
    {
        return $this->get("/$pair/ticker");
    }
}