<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 23.08.18
 * Time: 19:14
 */

namespace Ginero\GineroPhp\Model\Response;

/**
 * Class CollectionResponse
 * @package Ginero\GineroPhp\Model\Response
 */
final class CollectionResponse extends BaseResponse
{
    /**
     * @var array
     */
    protected $collection = [];

    /**
     * @param array $collection
     * @return CollectionResponse
     */
    public function setCollection(array $collection)
    {
        $this->collection = $collection;
        return $this;
    }
}