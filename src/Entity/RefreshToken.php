<?php

namespace Reddogs\Auth\Entity;

use League\OAuth2\Server\Entities\RefreshTokenEntityInterface;
use League\OAuth2\Server\Entities\Traits\RefreshTokenTrait;

class RefreshToken implements RefreshTokenEntityInterface
{
    use RefreshTokenTrait;

    /**
     * Id
     *
     * @var int
     */
    private $id;

    /**
     * Identifier
     *
     * @var string
     */
    private $identifier;

    public function __construct(string $identifier = null, string $accessToken = null,
        \DateTime $expiryDateTime = null)
    {
        $this->identifier = $identifier;
        $this->accessToken = $accessToken;
        $this->expiryDateTime = $expiryDateTime;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get identifier
     *
     * {@inheritDoc}
     * @see \League\OAuth2\Server\Entities\RefreshTokenEntityInterface::getIdentifier()
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Set identifier
     *
     * {@inheritDoc}
     * @see \League\OAuth2\Server\Entities\RefreshTokenEntityInterface::setIdentifier()
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }
}