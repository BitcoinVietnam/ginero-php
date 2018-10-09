<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 23.08.18
 * Time: 15:14
 */

namespace Ginero\GineroPhp\Section;

/**
 * Class Factory
 * @package Ginero\GineroPhp\Section
 */
class Factory
{
    /**
     * @param string|null $apiKey
     * @param string|null $apiSecret
     * @param string|null $apiBaseUri
     * @return Deposit
     */
    public function deposit($apiKey = null, $apiSecret = null, $apiBaseUri = null)
    {
        return new Deposit($apiKey, $apiSecret, $apiBaseUri);
    }

    /**
     * @param string|null $apiKey
     * @param string|null $apiSecret
     * @param string|null $apiBaseUri
     * @return Market
     */
    public function market($apiKey = null, $apiSecret = null, $apiBaseUri = null)
    {
        return new Market($apiKey, $apiSecret, $apiBaseUri);
    }

    /**
     * @param string|null $apiKey
     * @param string|null $apiSecret
     * @param string|null $apiBaseUri
     * @return Order
     */
    public function order($apiKey = null, $apiSecret = null, $apiBaseUri = null)
    {
        return new Order($apiKey, $apiSecret, $apiBaseUri);
    }

    /**
     * @param string|null $apiKey
     * @param string|null $apiSecret
     * @param string|null $apiBaseUri
     * @return Trade
     */
    public function trade($apiKey = null, $apiSecret = null, $apiBaseUri = null)
    {
        return new Trade($apiKey, $apiSecret, $apiBaseUri);
    }

    /**
     * @param string|null $apiKey
     * @param string|null $apiSecret
     * @param string|null $apiBaseUri
     * @return User
     */
    public function user($apiKey = null, $apiSecret = null, $apiBaseUri = null)
    {
        return new User($apiKey, $apiSecret, $apiBaseUri);
    }

    /**
     * @param string|null $apiKey
     * @param string|null $apiSecret
     * @param string|null $apiBaseUri
     * @return Withdrawal
     */
    public function withdrawal($apiKey = null, $apiSecret = null, $apiBaseUri = null)
    {
        return new Withdrawal($apiKey, $apiSecret, $apiBaseUri);
    }
}