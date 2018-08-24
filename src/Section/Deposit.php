<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 24.08.18
 * Time: 20:19
 */

namespace Ginero\GineroPhp\Section;

use Ginero\GineroPhp\Client;
use Ginero\GineroPhp\Model\Response\Deposit\GetDeposit;

/**
 * Class Deposit
 * @package Ginero\GineroPhp\Section
 */
final class Deposit extends Client
{
    /**
     * Deposit constructor.
     * @param null|string $apiKey
     * @param null|string $apiSecret
     * @param null|string $apiBaseUri
     */
    public function __construct($apiKey = null, $apiSecret = null, $apiBaseUri = null)
    {
        parent::__construct($apiKey, $apiSecret, $apiBaseUri . '/deposit');
    }

    /**
     * @param string $id
     * @return GetDeposit
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDeposit($id)
    {
        return $this->get($this->apiBaseUri . "/$id", GetDeposit::class);
    }

    /**
     * @param string $cryptoCurrency
     * @return GetDeposit
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getUnusedDeposit($cryptoCurrency)
    {
        return $this->get($this->apiBaseUri . "/$cryptoCurrency/unused", GetDeposit::class);
    }

    /**
     * @param string $cryptoCurrency
     * @return GetDeposit
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getNewDeposit($cryptoCurrency)
    {
        return $this->get($this->apiBaseUri . "/$cryptoCurrency/new", GetDeposit::class);
    }
}