<?php

namespace LaravelEnso\Enums\app\Services;

class EnumRepository
{
    private $enums;

    public function __construct()
    {
        $this->enums = collect();
    }

    public function register($enums)
    {
        collect($enums)->each(function ($enum, $key) {
            if (is_array($enum)) {
                $this->enums[$key] = $enum;
            } else {
                $this->enums[$key] = $enum::all();
            }
        });
    }

    public function all()
    {
        return $this->enums;
    }
}
