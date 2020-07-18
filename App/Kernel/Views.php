<?php

namespace App\Kernel;

class Views
{
    static $params = [];

    public static function render(string $path, array $params)
    {
        self::$params = $params;

        include __DIR__ . '/../Views/'. $path .'.php';
    }

    public static function getParams(): array
    {
        return self::$params;
    }

    public static function getParam(string $name)
    {
        return self::$params[$name];
    }
}