<?php

declare(strict_types = 1);

namespace Fm\Infrastructure\Service\Auth\Storage;

/**
 * Interface StorageInterface
 *
 * @package Fm\Infrastructure\Service\Auth
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016, Orbis
 */
interface StorageInterface
{
    public function write($identity);
    public function read();
    public function isEmpty(): boolean;
    public function clear();
}