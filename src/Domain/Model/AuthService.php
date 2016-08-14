<?php

declare(strict_types = 1);

namespace Fm\Domain\Model;

use Exception;
use Fm\Domain\Model\User\UserRepository;


/**
 * Class AuthService
 *
 * @package Fm\Domain\Model
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016, Orbis
 */
abstract class AuthService implements AuthServiceInterface
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function authenticate(string $email, string $password) : bool
    {
        if ($this->hasIdentity()) {
            return true;
        }

        $user = $this->userRepository->findByEmail($email);

        if (null === $user) {
            throw new Exception('El usuario solicitado no existe');
        }

        if ($user->getPassword() != $password) {
            throw  new Exception('La contraseña es incorrecta');
        }

        $this->setIdentity($user);

        return true;
    }
}