<?php

namespace App\Providers;

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
        if (config('database.default') === 'sqlite') {
            $dbPath = database_path('database.sqlite');
            @mkdir(dirname($dbPath), 0777, true);
            if (!file_exists($dbPath) || filesize($dbPath) === 0) {
                @touch($dbPath);
                @chmod($dbPath, 0777);
                try {
                    \Illuminate\Support\Facades\Artisan::call('migrate:fresh', ['--seed' => true, '--force' => true]);
                } catch (\Throwable $e) {
                    // Ignore
                }
            }
        }
    }
}
