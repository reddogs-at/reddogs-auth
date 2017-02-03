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
     * Identifier
     *
     * @var string
     */
    private $identitfier;

    /**
     * Secret
     *
     * @var string
     */
    private $secret;

    public function __construct(string $identifier = null, string $name = null, string $secret = null,
        string $redirectUri = null)
    {
        $this->identitfier = $identifier;
        $this->name = $name;
        $this->secret = $secret;
        $this->redirectUri = $redirectUri;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get identifier
     *
     * {@inheritDoc}
     * @see \League\OAuth2\Server\Entities\ClientEntityInterface::getIdentifier()
     */
    public function getIdentifier()
    {
        return $this->identitfier;
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