<?php

namespace Core\Middleware;

class Middleware
{
public const MAP = [
    'auth' => Auth::class,
    'guest' => Guest::class,
];

    public static function resolve($key)
    {
        if (! $key){
            return;
        }
        $middleware = static::MAP[$key] ?? false;
        if(!$middleware){
            throw new \Exception("we couldnt found a matching class for{$key}.");
        }
        (new $middleware)->handle();
}
}