<?php

declare(strict_types = 1);

namespace Fm\Infrastructure\Service\Auth\Storage;

use SplPriorityQueue;

/**
 * Class Chain
 *
 * @package Fm\Infrastructure\Service\Auth
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016, Orbis
 */
class Chain implements StorageInterface
{
    protected $queue;
    protected $storages;

    public function __construct(array $storages)
    {
        $this->storages = $storages;
        $this->queue = new SplPriorityQueue();
    }

    public function addStorage(StorageInterface $storage, $priority = 1)
    {
        $this->queue->insert($storage, $priority);
    }

    public function isEmpty() : boolean
    {
        $hightPriority = [];

        foreach ($this->queue as $storage) {
            if ($storage->isEmpty()) {
                $hightPriority[] = $storage;
                continue;
            }

            $storageValue = $storage->read();

            foreach ($hightPriority as $hightStorage) {
                $hightStorage->write($storageValue);
            }

            return false;
        }

        return true;
    }

    public function read()
    {
        return $this->queue->top()->read();
    }

    public function write($identity)
    {
        foreach ($this->queue as $storage) {
            $storage->write($identity);
        }
    }

    public function clear()
    {
        foreach ($this->queue as $storage) {
            $storage->clear();
        }
    }
}