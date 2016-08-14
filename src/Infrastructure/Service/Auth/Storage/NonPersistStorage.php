<?php

namespace Fm\Infrastructure\Service\Auth\Storage;

/**
 * Class NonPersistStorage
 *
 * @package Fm\Infrastructure\Service\Auth\Storage
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016, Orbis
 */
class NonPersistStorage implements StorageInterface
{
    protected $data;

    public function write($identity)
    {
        $this->data = $identity;
    }

    public function read()
    {
        return $this->data;
    }

    public function isEmpty(): boolean
    {
         return empty($this->data);
    }

    public function clear()
    {
        $this->data = null;
    }
}