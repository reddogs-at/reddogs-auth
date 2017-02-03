<?php

namespace ReddogsTest\Auth\Repository;

use Reddogs\Doctrine\ORM\UserRepository;

class UserRepositoryTest extends \PHPUnit_Framework_TestCase
{
    private $repository;

    protected function setUp()
    {
        $this->repository = $this->getMockBuilder(UserRepository::class)
            ->setMethods(['findOneBy'])
            ->getMock();
    }

    public function testGetUserEntityByUserCredentials()
    {
        $this->markTestIncomplete();
    }
}