<?php

declare(strict_types = 1);

namespace Fm\Application\Servicr\User;

/**
 * Class LoginUserService
 *
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016, Orbis
 */
class LoginUserService extends UserService
{
    /**
     * @param string $email
     * @param string $password
     * @return bool
     * @throws \Exception
     */
    public function execute(string $email, string $password)
    {
        return $this->authService->authenticate($email, $password);
    }
}