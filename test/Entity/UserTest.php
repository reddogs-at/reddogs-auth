<?php

namespace ReddogsTest\Auth\Entity;

use Reddogs\Auth\Entity\User;

class UserTest extends \PHPUnit_Framework_TestCase
{
    private $user;

    protected function setUp()
    {
        $this->user = new User('testName', 'testPassword');
    }

    public function testGetIdentifier()
    {
        $this->assertNull($this->user->getIdentifier());
    }

    public function testGetName()
    {
        $this->assertSame('testName', $this->user->getName());
    }

    public function testGetPassword()
    {
        $this->assertSame('testPassword', $this->user->getPassword());
    }
}