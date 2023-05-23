<?php

namespace EP\Providers;

use Illuminate\Support\ServiceProvider;
use Orchid\Platform\Dashboard;

class EpServiceProvider extends ServiceProvider
{

    public function boot(Dashboard $ds)
    {
        $ds->registerResource('scripts','/ep/js/ep-orchid-ui.js');
        $ds->registerResource('stylesheets','/ep/css/ep-orchid-ui.css');
        $this->loadViewsFrom(__DIR__ . '/../../../resources/views', 'ep');
        $this->publishes([
            __DIR__.'/../../../resources/views/vendor' => resource_path('views/vendor'),
        ]);
        $this->publishes([
            __DIR__.'/../../../resources/views/brand' => resource_path('views/brand'),
        ]);
        $this->publishes([
            __DIR__.'/../../../public/ep' => public_path('ep'),
        ], 'public');
    }
    
}