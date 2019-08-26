<?php

namespace LaravelEnso\Enums\app\Facades;

use Illuminate\Support\Facades\Facade;

class EnumRepository extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'enum_repository';
    }
}
