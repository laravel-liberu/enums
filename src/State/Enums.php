<?php

namespace LaravelLiberu\Enums\State;

use LaravelLiberu\Core\Contracts\ProvidesState;
use LaravelLiberu\Enums\Facades\Enums as Facade;

class Enums implements ProvidesState
{
    public function mutation(): string
    {
        return 'setEnums';
    }

    public function state(): mixed
    {
        return Facade::all();
    }
}
