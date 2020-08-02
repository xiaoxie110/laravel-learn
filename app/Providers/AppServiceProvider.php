<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        \DB::listen(function ($query) {
            $sql=$query->sql;
            $bindings=$query->bindings;
            $time=$query->time;
//            dump(json_encode($query));
//            dump(var_export(compact('sql','bindings','time'),true));

        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
