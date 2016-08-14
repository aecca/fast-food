<?php

declare(strict_types = 1);

namespace Fm\Infrastructure\Service\Auth;

use Fm\Domain\Model\AuthIdentity;
use Fm\Domain\Model\AuthService;
use Fm\Domain\Model\User\UserRepository;
use Fm\Infrastructure\Service\Auth\Storage\StorageInterface;

/**
 * Class SessionAuthService
 *
 * @package Fm\Infrastructure\Service\Auth
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016, Orbis
 */
class SessionAuthService extends AuthService
{
    protected $storage;

    public function __construct(StorageInterface $storage, UserRepository $userRepository)
    {
        parent::__construct($userRepository);

        $this->storage = $storage;
    }

    /**
     * {@inheritdoc}
     */
    public function getIdentity(): AuthIdentity
    {
        if ($this->storage->isEmpty()) {
            return null;
        }

        return $this->storage->read();
    }

    /**
     * {@inheritdoc}
     */
    public function setIdentity($user)
    {
        $this->storage->write($user);
    }

    /**
     * {@inheritdoc}
     */
    public function hasIdentity() : boolean
    {
        return ! $this->storage->isEmpty();
    }

    /**
     * {@inheritdoc}
     */
    public function logout()
    {
        $this->storage->clear();
    }
}