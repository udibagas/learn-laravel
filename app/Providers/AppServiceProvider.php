<?php

namespace App\Providers;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
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
        // Route::pattern('id', '[0-9]+');

        Gate::define('view-todo', function (User $user, Todo $todo) {
            return $user->id === $todo->user_id;
        });

        Gate::define('update-todo', function (User $user, Todo $todo) {
            return $user->id === $todo->user_id;
        });
    }
}
