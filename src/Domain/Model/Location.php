<?php

declare(strict_types = 1);

namespace Fm\Domain\Model;

/**
 * Class Location
 *
 * @package Fm\Domain\Model\Catalog
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016, Orbis
 */
class Location extends Entity
{
    protected $country;
    protected $city;
    protected $province;

    protected $latitude = -1;
    protected $longitude = -1;

    public function __construct($longitude, $latitude)
    {
        $this->longitude = $longitude;
        $this->latitude = $latitude;
    }

    public function getLatitude() : string
    {
        return $this->latitude;
    }

    public function getLongitude() : string
    {
        return $this->longitude;
    }
}