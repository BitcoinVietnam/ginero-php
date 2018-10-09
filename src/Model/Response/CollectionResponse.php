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
     * @return array
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @param array $collection
     * @return CollectionResponse
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;
        return $this;
    }

    /**
     * @param string $key
     * @return bool
     */
    public function has($key)
    {
        return isset($this->collection[$key]);
    }

    /**
     * @param string $key
     * @return mixed
     */
    public function get($key)
    {
        return $this->collection[$key];
    }
}