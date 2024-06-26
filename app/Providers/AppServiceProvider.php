<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share("applicationName", env("APP_NAME", "Task List"));
        View::share("applicationDescription", env("APP_DESCRIPTION", "This is a task list"));
    }
}
