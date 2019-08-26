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
        $this->enums = $this->enums->merge($enums);
    }

    public function all()
    {
        return $this->enums;
    }
}
