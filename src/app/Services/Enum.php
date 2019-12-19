<?php

namespace LaravelEnso\Enums\app\Services;

use ReflectionClass;

class Enum
{
    protected static $data;
    protected static $localisation = true;

    protected static function attributes()
    {
    }

    public static function constants()
    {
        return array_flip(
            (new ReflectionClass(static::class))
                ->getConstants()
        );
    }

    public static function get($key)
    {
        return self::data()->get($key);
    }

    public static function has($key)
    {
        return self::data()->has($key);
    }

    public static function keys()
    {
        return self::data()->keys();
    }

    public static function values()
    {
        return self::data()->values();
    }

    public static function json()
    {
        return self::data()->toJson();
    }

    public static function array()
    {
        return self::data()->toArray();
    }

    public static function all()
    {
        return self::array();
    }

    public static function object()
    {
        return (object) self::array();
    }

    public static function collection()
    {
        return self::data();
    }

    public static function select()
    {
        return self::data()->map(fn($value, $key) => (
            (object) ['id' => $key, 'name' => $value]
        ))->values();
    }

    public static function localisation($state = true)
    {
        self::$localisation = $state;
    }

    private static function data()
    {
        return self::transAll(self::source());
    }

    private static function source()
    {
        return static::$data
            ?? static::attributes()
            ?? static::constants();
    }

    private static function transAll($data)
    {
        return collect($data)->map(fn($value) => self::trans($value));
    }

    private static function trans($value)
    {
        return is_string($value) && self::$localisation
            ? __($value)
            : $value;
    }
}
