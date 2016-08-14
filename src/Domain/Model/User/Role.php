<?php

declare(strict_types = 1);

namespace Fm\Domain\Model\User;

/**
 * Class Role
 *
 * @package Fm\Domain\Model\User
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016, Orbis
 */
class Role
{
    protected $name;
    protected $description;

    public function __construct(string $name, string $description = '')
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function getName() : string
    {
        return $this->name;
    }

}