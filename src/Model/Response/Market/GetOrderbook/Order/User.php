<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 09.10.18
 * Time: 16:16
 */

namespace Ginero\GineroPhp\Model\Response\Market\GetOrderbook\Order;


use JMS\Serializer\Annotation as Serializer;

class User
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id")
     */
    protected $id;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("username")
     */
    protected $username;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("identity_verified")
     */
    protected $identityVerified = false;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return bool
     */
    public function isIdentityVerified()
    {
        return $this->identityVerified;
    }
}