<?php

namespace Solid\Html;

class Html
{
    public function __call(string $name, $arguments)
    {
        return $this->createTags($name, $arguments);
    }

    public static function __callStatic(string $name, $arguments)
    {
        return self::createTags($name, $arguments);
    }

    public static function createTags(string $name , $arguments)
    {
        $class = 'Solid\Html\Tag\\' . ucfirst($name);

        $reflection = new \ReflectionClass($class);
        return $reflection->newInstanceArgs($arguments);
    }
}