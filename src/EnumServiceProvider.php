<?php

namespace LaravelLiberu\Enums;

use Illuminate\Support\ServiceProvider;
use LaravelLiberu\Enums\Facades\Enums;

class EnumServiceProvider extends ServiceProvider
{
    public $register = [];

    public function boot()
    {
        Enums::register($this->register);
    }
}
