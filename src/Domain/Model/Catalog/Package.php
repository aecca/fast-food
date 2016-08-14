<?php

declare(strict_types = 1);

namespace Fm\Domain\Model\Catalog;

/**
 * Class Package
 *
 * @package Fm\Domain\Model\Catalog
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016, Orbis
 */
class Package
{
    protected $name;
    protected $image;
    protected $price;
    protected $discount;

    public function __construct(string $name, string $image, double $price, int $discount = 0)
    {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->discount = $discount;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): double
    {
        return $this->price;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getDiscount(): int
    {
        return $this->discount;
    }

    public function hasDiscount(): boolean
    {
        return $this->discount > 0;
    }

}