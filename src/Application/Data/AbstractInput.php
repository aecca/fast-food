<?php

namespace Fm\Application\Data;

use InvalidArgumentException;

/**
 * Class AbstractInput
 *
 * @package Fm\Common\Adapter\Data
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016, Orbis
 */
abstract class AbstractInput
{
    /**
     * @var array
     */
    public static $properties = [];

    /**
     * Return data in array format
     *
     * @param string
     * @return array
     */
    public function getArrayData()
    {
        if (null == static::$properties) {
            static::$properties = get_object_vars($this);
        }

        return static::$properties;
    }

    /**
     * Return statically property from call to magic method
     *
     * @param string $name
     * @param array $arguments
     * @return mixed|null
     */
    public function __call($name, $arguments)
    {
        if ( ($properties = static::getArrayData()) && isset($properties[$name])) {
            return $properties[$name];
        }

        return null;
    }

    /**
     * Set a static property
     *
     * @param string $name
     * @param mixed $value
     * @throws InvalidArgumentException
     * @return void
     */
    public function __set($name, $value)
    {
        if (isset(static::$properties[$name])) {
            static::$properties[$name] = $value;
        }

        throw new InvalidArgumentException("Undefined Property '$name'");
    }
}
