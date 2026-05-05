<?php

namespace Hoby\Providers;

use Illuminate\Support\ServiceProvider;

class HobyServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->mergeConfigFrom(__DIR__ . "/../Config/app.php", "hoby");
    }

    public function register(): void
    {
    }
}