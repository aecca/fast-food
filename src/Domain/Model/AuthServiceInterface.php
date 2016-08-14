<?php

declare(strict_types = 1);

namespace Fm\Domain\Model;

/**
 * Interface AuthServiceInterface
 *
 * @package Fm\Domain\Model
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016, Orbis
 */
interface AuthServiceInterface
{
    /**
     * @param $email
     * @param $password
     * @return bool
     */
    public function authenticate(string $email, string $password) : bool;

    /**
     * @return AuthIdentity
     */
    public function getIdentity(): AuthIdentity;

    /**
     * @param mixed $user
     * @return void
     */
    public function setIdentity($user);

    /**
     * @return bool
     */
    public function hasIdentity() : boolean;

    /**
     * @return void
     */
    public function logout();
}