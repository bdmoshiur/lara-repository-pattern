<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider {
    function register()
    {
        $this->app->bind([
            'App\Repositories\TestInterface',
            'App\Repositories\TestRepositories1',
        ]);
    }
}
