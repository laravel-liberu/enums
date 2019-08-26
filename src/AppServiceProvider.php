<?php

namespace LaravelEnso\Enums;

use Illuminate\Support\ServiceProvider;
use LaravelEnso\Enums\app\Services\EnumRepository;

class AppServiceProvider extends ServiceProvider
{
    public $singletons = [
        'enum_repository' => EnumRepository::class,
    ];

    public function boot()
    {
    }
}
