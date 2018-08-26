<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 26.08.18
 * Time: 18:40
 */

namespace Ginero\GineroPhp\Model\Response;

use Ginero\GineroPhp\Model\Response\Errors\Child;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Errors
 * @package Ginero\GineroPhp\Model\Response
 */
class Errors
{
    /**
     * @var Child[]
     *
     * @Serializer\Type("array<string, Ginero\GineroPhp\Model\Response\Errors\Child>")
     * @Serializer\SerializedName("children")
     */
    private $children = [];

    /**
     * @return Child[]
     */
    public function getChildren()
    {
        return $this->children;
    }
}