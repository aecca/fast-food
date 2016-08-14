<?php

declare(strict_types = 1);

namespace Fm\Domain\Model\Catalog;

use Fm\Domain\Model\Entity;

/**
 * Class MealPackage
 *
 * @package Fm\Domain\Model\Catalog
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016, Orbis
 */
class MealPackage extends Entity
{
    protected $name;
    protected $image;
    protected $description;
    protected $isOffer = false;

    /** @var Package[] */
    protected $packages = [];

    public function __construct($name, $image, $description, array $packages = [])
    {
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
        $this->packages = $packages;
    }

    public function isOffer() : boolean
    {
        return $this->isOffer;
    }

    public function packages() : array
    {
        return $this->packages;
    }

}