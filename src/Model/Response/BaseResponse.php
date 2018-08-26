<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 23.08.18
 * Time: 18:19
 */

namespace Ginero\GineroPhp\Model\Response;

use JMS\Serializer\Annotation as Serializer;
use Psr\Http\Message\ResponseInterface;

/**
 * Class BaseResponse
 * @package Ginero\GineroPhp\Model\Response
 */
abstract class BaseResponse
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("message")
     */
    private $message;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("code")
     */
    private $code = 200;

    /**
     * @var Error
     *
     * @Serializer\Type("Ginero\GineroPhp\Model\Response\Error")
     * @Serializer\SerializedName("error")
     */
    private $error;

    /**
     * @var Errors
     *
     * @Serializer\Type("Ginero\GineroPhp\Model\Response\Errors")
     * @Serializer\SerializedName("errors")
     */
    private $errors;

    /**
     * @var ResponseInterface
     */
    private $response;

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return Error
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @return Errors
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @return ResponseInterface
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param int $code
     * @return BaseResponse
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @param ResponseInterface $response
     * @return BaseResponse
     */
    public function setResponse(ResponseInterface $response)
    {
        $this->response = $response;
        return $this;
    }
}