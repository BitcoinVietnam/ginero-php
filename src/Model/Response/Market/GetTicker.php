<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 23.08.18
 * Time: 18:14
 */

namespace Ginero\GineroPhp\Model\Response\Market;

use Ginero\GineroPhp\Model\Response\BaseResponse;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class GetTicker
 * @package Ginero\GineroPhp\Model\Response\Market
 */
final class GetTicker extends BaseResponse
{
    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("last")
     */
    private $last;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("high")
     */
    private $high;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("low")
     */
    private $low;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("vwap")
     */
    private $vwap;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("volume")
     */
    private $volume;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("bid")
     */
    private $bid;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ask")
     */
    private $ask;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("timestamp")
     */
    private $timestamp;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("open")
     */
    private $open;

    /**
     * @return int
     */
    public function getLast()
    {
        return $this->last;
    }

    /**
     * @return int
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * @return int
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * @return int
     */
    public function getVwap()
    {
        return $this->vwap;
    }

    /**
     * @return int
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @return int
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * @return int
     */
    public function getAsk()
    {
        return $this->ask;
    }

    /**
     * @return int
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @return int
     */
    public function getOpen()
    {
        return $this->open;
    }
}