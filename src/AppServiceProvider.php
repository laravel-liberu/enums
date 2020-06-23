<?php

namespace LaravelEnso\Enums;

use Illuminate\Support\ServiceProvider;
use LaravelEnso\Enums\Services\Enums;

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
