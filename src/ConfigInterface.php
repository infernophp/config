<?php

declare(strict_types=1);

namespace Inferno\Config;

use Pimple\Container;
use Pimple\Psr11\Container as PsrContainer;
use Psr\Container\ContainerInterface;

interface ConfigInterface
{

    /**
     * @param string $key
     *
     * @return mixed
     */
    public function get(string $key);

    /**
     * @param string $key
     *
     * @return bool
     */
    public function has(string $key): bool;
}
