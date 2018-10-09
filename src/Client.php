<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 23.08.18
 * Time: 14:51
 */

namespace Ginero\GineroPhp;

use Doctrine\Common\Annotations\AnnotationRegistry;
use Ginero\GineroPhp\Model\Response\BaseResponse;
use Ginero\GineroPhp\Model\Response\CollectionResponse;
use Ginero\GineroPhp\Section\Factory;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\BadResponseException;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;

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
    protected $apiKey;

    /**
     * @var string
     */
    protected $apiSecret;

    /**
     * @var string
     */
    protected $apiBaseUri;

    /**
     * @var ClientInterface
     */
    private $guzzle;

    /**
     * @var SerializerInterface
     */
    private $serializer;

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
        $this->apiBaseUri = null !== $apiBaseUri ? $apiBaseUri : static::API_URL;
        $this->guzzle = new \GuzzleHttp\Client(['base_url' => $this->apiBaseUri]);
        AnnotationRegistry::registerLoader('class_exists');
        $this->serializer = SerializerBuilder::create()->build();
        $this->section = new Factory();
    }

    /**
     * @return Section\Deposit
     */
    public function deposit()
    {
        return $this->section->deposit($this->apiKey, $this->apiSecret, $this->apiBaseUri);
    }

    /**
     * @return Section\Market
     */
    public function market()
    {
        return $this->section->market($this->apiKey, $this->apiSecret, $this->apiBaseUri);
    }

    /**
     * @return Section\Order
     */
    public function order()
    {
        return $this->section->order($this->apiKey, $this->apiSecret, $this->apiBaseUri);
    }

    /**
     * @return Section\Trade
     */
    public function trade()
    {
        return $this->section->trade($this->apiKey, $this->apiSecret, $this->apiBaseUri);
    }
    /**
     * @return Section\User
     */
    public function user()
    {
        return $this->section->user($this->apiKey, $this->apiSecret, $this->apiBaseUri);
    }

    /**
     * @return Section\Withdrawal
     */
    public function withdrawal()
    {
        return $this->section->withdrawal($this->apiKey, $this->apiSecret, $this->apiBaseUri);
    }

    /**
     * @param string $url
     * @param string|null $className
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function get($url, $className = null)
    {
        return $this->request('GET', $url, [], $className);
    }

    /**
     * @param string $url
     * @param string $body
     * @param null $className
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function post($url, $body, $className = null)
    {
        return $this->request('POST', $url, ['body' => $body], $className);
    }

    /**
     * @param string $url
     * @param string|null $body
     * @param string|null $className
     * @return BaseResponse|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function patch($url, $body = null, $className = null)
    {
        return $this->request('PATCH', $url, ['body' => $body], $className);
    }

    /**
     * @param $method
     * @param $url
     * @param array $options
     * @param string|null $className
     * @return BaseResponse|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    private function request($method, $url, array $options = [], $className = null)
    {
        $options['headers']['Accept'] = 'application/json';
        if ($this->apiKey && $this->apiSecret) {
            $options['headers']['apikey'] = $this->apiKey;
            $options['headers']['nonce'] = $nonce = number_format(round(microtime(true) * 100000000), 0, '.', '');
            $options['headers']['signature'] = $this->sign($nonce . $this->apiKey);
        }

        try {
            $response = $this->guzzle->request($method, $url, $options);
            $data = $response->getBody()->getContents();
        } catch (BadResponseException $exception) {
            $response = $exception->getResponse();
            $data = $response->getBody()->getContents();
        }

        $processedResponse = $data;

        if (null !== $className) {
            /** @var BaseResponse|object $response */
            $processedResponse = $this->deserialize($data, $className);

            if (is_array($processedResponse)) {
                $processedResponse = (new CollectionResponse())->setCollection($processedResponse);
            }
            if ($processedResponse instanceof BaseResponse) {
                $processedResponse->setResponse($response);
                if (null === $processedResponse->getCode()) {
                    $processedResponse->setCode($response->getCode());
                }
            }
        }

        return $processedResponse;
    }

    /**
     * @param string $message
     * @return string
     */
    private function sign($message)
    {
        return hash_hmac('sha256', $message, $this->apiSecret);
    }

    /**
     * @param mixed $data
     * @return string
     */
    protected function serialize($data)
    {
        return $this->serializer->serialize($data, 'json');
    }

    /**
     * @param string $data
     * @param string $className
     * @return object
     */
    private function deserialize($data, $className)
    {
        return $this->serializer->deserialize($data, $className, 'json');
    }
}