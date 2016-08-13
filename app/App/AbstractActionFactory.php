<?php

namespace Fm\App;

use Interop\Container\ContainerInterface;
use ReflectionClass;
use Zend\ServiceManager\Factory\AbstractFactoryInterface;

/**
 * Class AbstractActionFactory
 *
 * @package Fm\App
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016
 */
class AbstractActionFactory implements AbstractFactoryInterface
{
    /**
     * Invokable Abstract Action Factory === 1 Reflection Class per request
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $reflection = new ReflectionClass($requestedName);

        if (null === ($constructor = $reflection->getConstructor())) {
            return new $requestedName;
        }

        $dependencies = [];

        foreach ($constructor->getParameters() as $parameter) {
            $dependencies[] = $container->get($parameter->getClass()->getName());
        }

        return $reflection->newInstanceArgs($dependencies);
    }

    public function canCreate(ContainerInterface $container, $requestedName)
    {
        if (substr($requestedName, -6) == 'Action') {
            return true;
        }

        return false;
    }
}
