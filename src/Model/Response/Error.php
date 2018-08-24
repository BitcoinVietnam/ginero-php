<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 23.08.18
 * Time: 18:20
 */

namespace Ginero\GineroPhp\Model\Response;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Error
 * @package Ginero\GineroPhp\Model\Response
 */
class Error
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("code")
     */
    private $code;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("message")
     */
    private $message;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
}