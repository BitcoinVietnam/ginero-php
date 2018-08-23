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
     * @return Market
     */
    public function market($apiKey = null, $apiSecret = null, $apiBaseUri = null)
    {
        return new Market($apiKey, $apiSecret, $apiBaseUri);
    }
}