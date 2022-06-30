<?php

namespace zaporylie\Vipps\Model\Authorization;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ResponseGetToken
 *
 * @package Vipps\Model\Authorization
 */
class ResponseGetToken
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $tokenType;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $expiresIn;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $extExpiresIn;

    /**
     * @var \DateTimeInterface|int
     * @Serializer\Type("DateTime<'U'>")
     */
    protected $expiresOn;

    /**
     * @var \DateTimeInterface|int
     * @Serializer\Type("DateTime<'U'>")
     */
    protected $notBefore;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $resource;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $accessToken;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $name;

    /**
     * Gets accessToken value.
     *
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    /**
     * Gets expiresIn value.
     *
     * @return int
     */
    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }

    /**
     * Gets expiresOn value.
     *
     * @return
     */
    public function getExpiresOn()
    {
        return $this->expiresOn;
    }

    /**
     * Gets extExpiresIn value.
     *
     * @return int
     */
    public function getExtExpiresIn(): int
    {
        return $this->extExpiresIn;
    }

    /**
     * Gets notBefore value.
     *
     * @return
     */
    public function getNotBefore()
    {
        return $this->notBefore;
    }

    /**
     * Gets resource value.
     *
     * @return string
     */
    public function getResource(): string
    {
        return $this->resource;
    }

    /**
     * Gets tokenType value.
     *
     * @return string
     */
    public function getTokenType(): string
    {
        return $this->tokenType;
    }

    /**
     * Gets tokenName value.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
