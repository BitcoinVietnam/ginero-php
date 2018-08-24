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
     * @var Error
     *
     * @Serializer\Type("Ginero\GineroPhp\Model\Response\Error")
     * @Serializer\SerializedName("error")
     */
    private $error;

    /**
     * @var ResponseInterface
     */
    private $response;

    /**
     * @return Error
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @return ResponseInterface
     */
    public function getResponse()
    {
        return $this->response;
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