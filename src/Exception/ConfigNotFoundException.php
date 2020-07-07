<?php

declare(strict_types=1);

namespace Inferno\Config\Exception;

use Exception;

use function sprintf;

class ConfigNotFoundException extends Exception implements ConfigExceptionInterface
{
    /**
     * @param string $pathInfo
     *
     * @return \Inferno\Config\Exception\ConfigNotFoundException
     */
    public static function forKey(string $key): ConfigNotFoundException
    {
        return new static(
            sprintf('Config not found for key "%s".', $key)
        );
    }
}
