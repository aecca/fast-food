<?php

declare(strict_types = 1);

namespace Fm\Domain\Model\User;

/**
 * Interface UserRepository
 *
 * @package Fm\Domain\Model\User
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016, Orbis
 */
interface UserRepository
{
    /**
     * Find a user by identifier
     *
     * @param int $id
     * @return User
     */
    public function ofId(int $id) : User;

    /**
     * Find user by email
     *
     * @param string $email
     * @return User
     */
    public function findByEmail(string $email) : User;

    /**
     * Storage user in repository
     *
     * @param User $user
     * @return User
     */
    public function persist(User $user): User;

    /**
     * Update user data
     *
     * @param User $user
     * @return User
     */
    public function update(User $user) : User;

}