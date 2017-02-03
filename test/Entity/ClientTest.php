<?php

namespace ReddogsTest\Auth\Entity;

use Reddogs\Auth\Entity\Client;

class ClientTest extends \PHPUnit_Framework_TestCase
{
    private $client;

    protected function setUp()
    {
        $this->client = new Client('testIdentifier', 'testName', 'testSecret', 'testRedirectUri');
    }

    public function testGetId()
    {
        $this->assertNull($this->client->getId());
    }

    public function testGetIdentifier()
    {
        $this->assertSame('testIdentifier', $this->client->getIdentifier());
    }

    public function testGetName()
    {
        $this->assertSame('testName', $this->client->getName());
    }

    public function testGetSecret()
    {
        $this->assertSame('testSecret', $this->client->getSecret());
    }

    public function testGetRedirectUri()
    {
        $this->assertSame('testRedirectUri', $this->client->getRedirectUri());
    }
}