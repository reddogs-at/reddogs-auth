<?php

namespace ReddogsTest\Auth\Entity;

use Reddogs\Auth\Entity\RefreshToken;

class RefreshTokenTest extends \PHPUnit_Framework_TestCase
{
    private $refreshToken;

    protected function setUp()
    {
        $this->refreshToken = new RefreshToken();
    }

    public function testGetIdentifier()
    {
        $this->assertNull($this->refreshToken->getIdentifier());
    }
}