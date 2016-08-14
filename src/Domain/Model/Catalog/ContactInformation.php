<?php

declare(strict_types = 1);

namespace Fm\Domain\Model\Catalog;

/**
 * Class ContactInformation
 *
 * @package Fm\Domain\Model\Catalog
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016, Orbis
 */
class ContactInformation
{
    protected $email;
    protected $phone;
    protected $cellphone;

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getCellphone(): string
    {
        return $this->cellphone;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function sameValueAs(ContactInformation $info)
    {
        return $this->email == $info->getEmail()
               && $this->cellphone == $info->getCellphone()
               && $this->phone == $info->getPhone();
    }

}