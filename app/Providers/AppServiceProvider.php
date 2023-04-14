<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//esta linea se agrega luego de crear la base de datos.
use Illuminate\Support\Facades\Schema;

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
        //aqui vuelvo a llamar a Schema para no tener errores al momento de correr las migraciones.
       Schema::defaultStringLength(191);
    }
}
