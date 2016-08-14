<?php

declare(strict_types = 1);

namespace Fm\Domain\Model;

/**
 * Class Entity
 *
 * @package Fm\Domain\Model
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016, Orbis
 */
class Entity
{
    protected $id;

    public function getId() : int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }
}