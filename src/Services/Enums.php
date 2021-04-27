<?php

namespace LaravelEnso\Enums\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;

class Enums
{
    private $enums;

    public function __construct()
    {
        $this->enums = new Collection();
    }

    public function register($enums)
    {
        Collection::wrap($enums)
            ->each(fn ($enum, $key) => $this->enums->put($key, $enum));

        Collection::wrap($enums)->each(fn ($enum, $key) => $this->enums
            ->put($key, is_array($enum) ? $enum : App::make($enum)::all()));
    }

    public function remove($aliases)
    {
        Collection::wrap($aliases)
            ->each(fn ($alias) => $this->enums->forget($alias));
    }

    public function all()
    {
        $map = fn ($enum) => is_array($enum)
            ? $enum
            : App::make($enum)::all();

        Enum::localisation(false);

        $this->enums->transform($map);

        Enum::localisation(true);

        return $this->enums;
    }
}
