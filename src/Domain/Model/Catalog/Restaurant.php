<?php

declare(strict_types = 1);

namespace Fm\Domain\Model\Catalog;

use Fm\Domain\Model\Entity;
use Fm\Domain\Model\Location;
use Ramsey\Uuid\Uuid;

/**
 * Class Restaurant
 *
 * @package Fm\Domain\Model\Catalog
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016, Orbis
 */
class Restaurant extends Entity
{
    protected $name;
    protected $description;
    protected $slug;
    protected $image;
    protected $deliveryTimeMin;
    protected $deliveryTimeMax;

    /** @var ContactInformation[] */
    protected $contactInformation = [];

    /** @var Location[] */
    protected $locations = [];

    /** @var MealPackage[] */
    protected $mealPackages = [];

    public function __construct($name, $description, $image)
    {
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->generateSlug();
    }

    public function contactInformation()
    {
        return $this->contactInformation;
    }

    public function locations(): array
    {
        return $this->locations;
    }

    public function mealPackages(): array
    {
        return $this->mealPackages;
    }

    public function addLocation(Location $location)
    {
        $this->locations[] = $location;
    }

    public function addMealPackage(MealPackage $package)
    {
        $this->mealPackages[] = $package;
    }

    public function addContactInformation(ContactInformation $info)
    {
        foreach ($this->contactInformation as $contact) {
            if ($contact->sameValueAs($info)) {
                return false;
            }
        }

        $this->contactInformation[] = $info;
    }

    private function generateSlug()
    {
        $this->slug = Uuid::uuid4()->toString();
    }

}