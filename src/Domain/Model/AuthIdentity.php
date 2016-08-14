<?php

namespace Fm\Domain\Model;

use Fm\Domain\Model\User\User;

/**
 * Class AuthIdentity
 *
 * @package Fm\Domain\Model
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016, Orbis
 */
class AuthIdentity
{
    protected $userId;
    protected $emai;
    protected $name;

    public function __construct($userId, $emai, $name, $token)
    {
        $this->userId = $userId;
        $this->emai = $emai;
        $this->token = $token;
        $this->name = $name;
    }

    public static function fromUser(User $user)
    {
        return new self(
            $user->getId(),
            $user->getEmail(),
            $user->getName(),
            rand(time())
        );
    }

    public function getEmai() : string
    {
        return $this->emai;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getToken(): string
    {
        return $this->token;
    }
}