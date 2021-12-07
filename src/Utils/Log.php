<?php

declare(strict_types=1);

namespace Chaoji\Hyperf\Utils;


use Hyperf\Logger\LoggerFactory;
use Hyperf\Utils\ApplicationContext;

class Log
{
    public static function getInstance(string $name = 'app'): \Psr\Log\LoggerInterface
    {
        return ApplicationContext::getContainer()->get(LoggerFactory::class)->get($name);
    }

    /**
     * @param string $name
     * @param mixed $arguments
     * @return mixed
     */
    public static function __callStatic(string $name, $arguments)
    {
        return self::getInstance()->$name(...$arguments);
    }
}