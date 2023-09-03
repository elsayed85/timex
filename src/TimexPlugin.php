<?php

namespace Buildix\Timex;

use Buildix\Timex\Resources\EventResource;
use Filament\Contracts\Plugin;
use Filament\FilamentManager;
use Filament\Panel;

class TimexPlugin implements Plugin
{
    public static function make(): static
    {
        return app(static::class);
    }

    public function getId(): string
    {
        return 'timex';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            EventResource::class
        ]);

    }

    public function boot(Panel $panel): void
    {
        //
    }

    /**
     * Class MyClass overrides inline block form.
     *
     * @phpstan-ignore-next-line */
    public static function get(): Plugin | FilamentManager
    {
        return filament(app(static::class)->getId());
    }
}
