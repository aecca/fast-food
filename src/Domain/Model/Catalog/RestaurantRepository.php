<?php

declare(strict_types = 1);

namespace Fm\Domain\Model\Catalog;

/**
 * Class RestaurantRepository
 *
 * @package Fm\Domain\Model\Catalog
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016, Orbis
 */
interface RestaurantRepository
{
    /**
     * Find restaurant by identifier
     *
     * @param int $id
     * @return Restaurant
     */
    public function ofId(int $id): Restaurant;

    /**
     * Storage user in repository
     *
     * @param Restaurant $user
     * @return Restaurant
     */
    public function persist(Restaurant $user): Restaurant;

    /**
     * Update user data
     *
     * @param Restaurant $user
     * @return Restaurant
     */
    public function update(Restaurant $user) : Restaurant;
}