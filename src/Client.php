<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 23.08.18
 * Time: 14:51
 */

namespace Ginero\GineroPhp;

use Ginero\GineroPhp\Section\Factory;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;

/**
 * Class Client
 * @package Ginero\GineroPhp
 */
class Client
{
    const API_URL = 'https://ginero.io/api';

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $apiSecret;

    /**
     * @var string
     */
    private $apiBaseUri;

    /**
     * @var ClientInterface
     */
    private $guzzle;

    /**
     * @var Factory
     */
    private $section;

    /**
     * Client constructor.
     * @param string $apiKey
     * @param string $apiSecret
     * @param string $apiBaseUri
     */
    public function __construct($apiKey = null, $apiSecret = null, $apiBaseUri = null)
    {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
        $this->apiBaseUri = null !== $apiBaseUri ? $this->apiBaseUri : static::API_URL;
        $this->guzzle = new \GuzzleHttp\Client(['base_url' => $this->apiBaseUri]);
        $this->section = new Factory();
    }

    /**
     * @return Section\Market
     */
    public function market()
    {
        return $this->section->market($this->apiKey, $this->apiSecret, $this->apiBaseUri);
    }

    /**
     * @param string $url
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function get($url)
    {
        return $this->request('GET', $url);
    }

    /**
     * @param $method
     * @param $url
     * @param array $options
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function request($method, $url, array $options = [])
    {
        $response = $this->guzzle->request($method, $url, $options);

        // todo: catch exceptions, process response

        return $response;
    }
}