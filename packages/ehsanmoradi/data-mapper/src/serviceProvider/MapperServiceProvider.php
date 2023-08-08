<?php

namespace EhsanMoradi\DataMapper\serviceProvider;

use Illuminate\Support\ServiceProvider;

class MapperServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/data-mapper.php', 'data-mapper');
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/data-mapper.php.php' => config_path('data-mapper.php'),
        ], 'config');
    }
}
