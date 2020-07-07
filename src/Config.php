<?php

declare(strict_types=1);

namespace Inferno\Config;

use Inferno\Config\Exception\ConfigNotFoundException;
use Pimple\Container;
use Pimple\Psr11\Container as PsrContainer;
use Psr\Container\ContainerInterface;

final class Config implements ConfigInterface
{
    /**
     * @var string[]
     */
    private array $configs;

    /**
     * @param string[] $configs
     */
    public function __construct(array $configs)
    {
        $this->configs = $configs;
    }

    /**
     * @param string $key
     *
     * @return mixed
     */
    public function get(string $key)
    {
        return $this->configs[$key];
    }

    /**
     * @param string $key
     *
     * @return bool
     */
    public function has(string $key): bool
    {
        return array_key_exists($key, $this->configs);
    }
}
