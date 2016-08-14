<?php

declare(strict_types = 1);

namespace Fm\Domain\Model\Catalog;

use Fm\Domain\Model\Entity;
use Ramsey\Uuid\Uuid;

/**
 * Class Category
 *
 * @package Fm\Domain\Model\Catalog
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016, Orbis
 */
class Category extends Entity
{
    protected $name;
    protected $slug;
    protected $description;
    protected $parent = null;

    public function __construct(string $name, string $description, Category $parent = null )
    {
        $this->name = $name;
        $this->description = $description;
        $this->parent = $parent;
        $this->generateSlug();
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getSlug() : string
    {
        return $this->slug;
    }

    private function generateSlug()
    {
        $this->slug = Uuid::uuid4()->toString();
    }


}