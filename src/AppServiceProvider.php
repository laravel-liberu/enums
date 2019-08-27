<?php

namespace LaravelEnso\Enums;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $singletons = [
        'enums' => Enums::class,
    ];
}
