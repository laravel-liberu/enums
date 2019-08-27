<?php

namespace LaravelEnso\Enums\app\Services;

class Enums
{
    private $enums;

    public function __construct()
    {
        $this->enums = collect();
    }

    public function register($enums)
    {
        collect($enums)->each(function ($enum, $key) {
            $array = is_array($enum) ? $enum : $enum::all();

            $this->enums->put($key, $array);
        });
    }

    public function remove($aliases)
    {
        collect($aliases)->each(function ($alias) {
            $this->enums->forget($alias);
        });
    }

    public function all()
    {
        return $this->enums;
    }
}
