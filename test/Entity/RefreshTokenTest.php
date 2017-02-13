<?php

namespace ReddogsTest\Auth\Entity;

use Reddogs\Auth\Entity\RefreshToken;

class RefreshTokenTest extends \PHPUnit_Framework_TestCase
{
    private $refreshToken, $expiryDateTime;

    protected function setUp()
    {
        $this->expiryDateTime = new \DateTime();
        $this->refreshToken = new RefreshToken('testIdentifier', 'testAccessToken', $this->expiryDateTime);
    }

    public function testGetId()
    {
        $this->assertNull($this->refreshToken->getId());
    }

    public function testGetIdentifier()
    {
        $this->assertSame('testIdentifier', $this->refreshToken->getIdentifier());
    }

    public function testSetIdentifier()
    {
        $this->refreshToken->setIdentifier('newIdentifier');
        $this->assertSame('newIdentifier', $this->refreshToken->getIdentifier());
    }

    public function testGetAccessToken()
    {
        $this->assertSame('testAccessToken', $this->refreshToken->getAccessToken());
    }

    public function testSetAccessToken()
    {
        $this->refreshToken->setAccessToken('newAccessToken');
        $this->assertSame('newAccessToken', $this->refreshToken->getAccessToken());
    }

    public function testGetExpiryDateTime()
    {
        $this->assertSame($this->expiryDateTime, $this->refreshToken->getExpiryDateTime());
    }
}