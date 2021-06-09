<?php

namespace LaravelEnso\Enums\State;

use LaravelEnso\Core\Contracts\ProvidesState;
use LaravelEnso\Enums\Facades\Enums as Facade;

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
