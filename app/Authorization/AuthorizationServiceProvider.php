<?php

namespace App\Authorization;

use Illuminate\Support\ServiceProvider;
use App\Authorization\User;

class AuthorizationServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Authorization', function ($app) {
            return new Authorization(auth()->user());
        });
    }
}
