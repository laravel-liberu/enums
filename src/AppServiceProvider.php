<?php

namespace LaravelLiberu\Enums;

use Illuminate\Support\ServiceProvider;
use LaravelLiberu\Enums\Services\Enums;

class AppServiceProvider extends ServiceProvider
{
    public $singletons = [
        'enums' => Enums::class,
    ];

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../stubs/EnumServiceProvider.stub' => app_path(
                'Providers/EnumServiceProvider.php'
            ),
        ], 'enum-provider');
    }
}
