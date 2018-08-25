<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 24.08.18
 * Time: 15:33
 */

namespace Ginero\GineroPhp\Section;

use Ginero\GineroPhp\Client;
use Ginero\GineroPhp\Model\Request\Withdrawal\CreateWithdrawal;
use Ginero\GineroPhp\Model\Response\Withdrawal\GetWithdrawal;

/**
 * Class Withdrawal
 * @package Ginero\GineroPhp\Section
 */
final class Withdrawal extends Client
{
    /**
     * Withdrawal constructor.
     * @param null|string $apiKey
     * @param null|string $apiSecret
     * @param null|string $apiBaseUri
     */
    public function __construct($apiKey = null, $apiSecret = null, $apiBaseUri = null)
    {
        parent::__construct($apiKey, $apiSecret, $apiBaseUri . '/withdrawal');
    }

    /**
     * @param string $id
     * @return GetWithdrawal
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getWithdrawal($id)
    {
        return $this->get($this->apiBaseUri . "/$id", GetWithdrawal::class);
    }

    /**
     * @param string $cryptoCurrency
     * @param int $amount
     * @param string $destination
     * @param string|null $comment
     * @return \Ginero\GineroPhp\Model\Response\Withdrawal\CreateWithdrawal
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createWithdrawal($cryptoCurrency, $amount, $destination, $comment = null)
    {
        $body = $this->serialize(
            (new CreateWithdrawal())
                ->setCryptoCurrency($cryptoCurrency)
                ->setAmount($amount)
                ->setDestination($destination)
                ->setComment($comment)
        );

        return $this->post($this->apiBaseUri . "/", $body, \Ginero\GineroPhp\Model\Response\Withdrawal\CreateWithdrawal::class);
    }
}