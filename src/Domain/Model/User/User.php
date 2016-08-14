<?php

declare(strict_types = 1);

namespace Fm\Domain\Model\User;

use Fm\Domain\Model\Entity;
use InvalidArgumentException;

/**
 * Class User
 *
 * @package Fm
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016, Orbis
 */
class User extends Entity
{
    protected $email;
    protected $password;
    protected $name;

    public function __construct($email, $password, $name)
    {
        $this->setName($name);
        $this->setEmail($email);
        $this->changePassword($password);

    }

    private function setName(string $name)
    {
        if (empty($name)) {
            throw new InvalidArgumentException('El nombre del usuario es requerido');
        }

        $this->name = $name;
    }

    private function setEmail(string $email)
    {
        if (false === filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw  new InvalidArgumentException('El email del usuario no es correcto');
        }

        $this->email = $email;
    }

    public function changePassword(string $password)
    {
        if ($this->password === $password) {
            throw new InvalidArgumentException('La contraseña no debe ser la misma que la actual');
        }

        $this->password = $password;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function getPassword() : string
    {
        return $this->password;
    }

}