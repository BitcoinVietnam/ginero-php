<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 09.10.18
 * Time: 22:44
 */

namespace Ginero\GineroPhp\Section;

use Ginero\GineroPhp\Client;
use Ginero\GineroPhp\Model\Response\Trade\ConfirmPayment;
use Ginero\GineroPhp\Model\Response\Trade\MarkAsPaid;

/**
 * Class Trade
 * @package Ginero\GineroPhp\Section
 */
final class Trade extends Client
{
    /**
     * Trade constructor.
     * @param null|string $apiKey
     * @param null|string $apiSecret
     * @param null|string $apiBaseUri
     */
    public function __construct($apiKey = null, $apiSecret = null, $apiBaseUri = null)
    {
        parent::__construct($apiKey, $apiSecret, $apiBaseUri . '/trade');
    }

    /**
     * @param string $tradeId
     * @return MarkAsPaid
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function markAsPaid($tradeId)
    {
        return $this->patch($this->apiBaseUri . '/' . $tradeId . '/mark-as-paid', null, MarkAsPaid::class);
    }

    /**
     * @param string $tradeId
     * @return ConfirmPayment
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function confirmPayment($tradeId)
    {
        return $this->patch($this->apiBaseUri . '/' . $tradeId . '/confirm-payment', null, MarkAsPaid::class);
    }
}