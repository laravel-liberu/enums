<?php

namespace LaravelEnso\Enums;

use Illuminate\Support\ServiceProvider;
use LaravelEnso\Enums\Facades\Enums;
use LaravelEnso\Enums\Services\Enum;

class EnumServiceProvider extends ServiceProvider
{
    public $register = [];

    public function boot()
    {
        Enum::localisation(false);

        Enums::register($this->register);

        Enum::localisation(true);
    }
}
