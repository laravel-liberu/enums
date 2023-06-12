<?php

namespace LaravelEnso\Enums\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;

class Enums
{
    private readonly \Illuminate\Support\Collection $enums;

    public function __construct()
    {
        $this->enums = new Collection();
    }

    public function register($enums)
    {
        Collection::wrap($enums)
            ->each(fn ($enum, $key) => $this->enums->put($key, $enum));
    }

    public function remove($aliases)
    {
        Collection::wrap($aliases)
            ->each(fn ($alias) => $this->enums->forget($alias));
    }

    public function all()
    {
        return $this->enums->map(fn ($enum) => is_array($enum) ? $enum : $this->map($enum));
    }

    private function map(string $enum)
    {
        $enum::localisation(false);
        $all = App::make($enum)::all();
        $enum::localisation(true);

        return $all;
    }
}
