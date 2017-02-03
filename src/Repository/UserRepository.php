<?php
declare(strict_types = 1);
namespace Reddogs\Doctrine\ORM;

use Doctrine\ORM\EntityRepository;
use League\OAuth2\Server\Repositories\UserRepositoryInterface;
use League\OAuth2\Server\Entities\ClientEntityInterface;
use Reddogs\Auth\Entity\User;

class UserRepository extends EntityRepository implements UserRepositoryInterface
{

    /**
     * Get user entity by user credentials
     *
     * {@inheritDoc}
     * @see \League\OAuth2\Server\Repositories\UserRepositoryInterface::getUserEntityByUserCredentials()
     */
    public function getUserEntityByUserCredentials($username, $password, $grantType,
        ClientEntityInterface $clientEntity) : User
    {

    }
}