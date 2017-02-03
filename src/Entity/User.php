<?php
/**
 * Reddogs (https://reddogs.at)
 *
 * @see       https://github.com/reddogs/reddogs-auth for the canonical source repository
 * @copyright Copyright (c) 2016 Reddogs (https://reddogs.at)
 * @license   https://github.com/reddogs/reddogs-auth/blob/master/LICENSE.md New BSD License
 */
declare(strict_types=1);

namespace Reddogs\Auth\Entity;

use Doctrine\ORM\Mapping as ORM;
use League\OAuth2\Server\Entities\UserEntityInterface;
use Reddogs\Doctrine\ORM\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User implements UserEntityInterface
{

    /**
     * Id
     *
     * @var int
     */
    private $id;

    /**
     * Password
     *
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $password;

    /**
     * Firstname
     *
     * @var string
     */
    private $firstname;

    /**
     * Lastname
     *
     * @var string
     */
    private $lastname;

    /**
     * Constructor
     *
     * @param string $name
     * @param string $password
     * @param string $firstname
     * @param string $lastname
     */
    public function __construct($name = null, $password = null)
    {
        $this->name = $name;
        $this->password = $password;
    }

    /**
     * Get identifier
     *
     * @return int
     */
    public function getIdentifier()
    {
        return $this->id;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }
}