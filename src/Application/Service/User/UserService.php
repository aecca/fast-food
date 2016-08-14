<?php

namespace Fm\Application\Servicr\User;

use Fm\Domain\Model\AuthService;
use Fm\Domain\Model\User\UserRepository;

/**
 * Class UserService
 *
 * @package Fm\Application\Servicr\User
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016, Orbis
 */
class UserService
{
    protected $userRepository;
    protected $authService;

    public function __construct(AuthService $authService, UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->authService = $authService;
    }
}