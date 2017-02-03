<?php

declare(strict_types=1);

namespace Reddogs\Auth\Entity;

use League\OAuth2\Server\Entities\ClientEntityInterface;
use League\OAuth2\Server\Entities\Traits\ClientTrait;

class Client implements ClientEntityInterface
{
    use ClientTrait;

    /**
     * Id
     *
     * @var string
     */
    private $id;

    /**
     * Secret
     *
     * @var string
     */
    private $secret;

    public function __construct(string $name = null, string $secret = null, string $redirectUri = null)
    {
        $this->name = $name;
        $this->secret = $secret;
        $this->redirectUri = $redirectUri;
    }

    /**
     * Get identifier
     *
     * {@inheritDoc}
     * @see \League\OAuth2\Server\Entities\ClientEntityInterface::getIdentifier()
     */
    public function getIdentifier()
    {
        return $this->id;
    }

    /**
     * Get secret
     *
     * @return string
     */
    public function getSecret() : string
    {
        return $this->secret;
    }
}