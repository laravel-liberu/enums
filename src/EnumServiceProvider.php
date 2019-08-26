<?php

namespace LaravelEnso\Enums;

use Illuminate\Support\ServiceProvider;
use LaravelEnso\Enums\app\Facades\EnumRepository;

class EnumServiceProvider extends ServiceProvider
{
    protected $register = [];

    public function boot()
    {
        EnumRepository::register($this->register);
    }
}
