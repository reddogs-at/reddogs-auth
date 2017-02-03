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

    public function getIdentifier()
    {
        return $this->id;
    }
}