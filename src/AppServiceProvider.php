<?php

namespace LaravelEnso\Enums;

use Illuminate\Support\ServiceProvider;
use LaravelEnso\Enums\app\Services\Enums;

class AppServiceProvider extends ServiceProvider
{
    public $singletons = [
        'enums' => Enums::class,
    ];
}
