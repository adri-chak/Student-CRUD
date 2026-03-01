<?php

namespace Adrija\StudentCrud;

use Illuminate\Support\ServiceProvider;

class StudentCrudServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/views', 'student-crud');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        // Publish views (optional)
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/student-crud'),
        ], 'student-crud-views');
    }

    public function register()
    {
        //
    }
}