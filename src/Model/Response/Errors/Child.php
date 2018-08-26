<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 26.08.18
 * Time: 18:41
 */

namespace Ginero\GineroPhp\Model\Response\Errors;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Child
 * @package Ginero\GineroPhp\Model\Response\Errors
 */
class Child
{
    /**
     * @var string[]
     *
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("errors")
     */
    private $errors = [];

    /**
     * @return string[]
     */
    public function getErrors()
    {
        return $this->errors;
    }
}