<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Pembelian;

class FormPembelianServiceProvider extends ServiceProvider
{
    public function boot()
    {
        view()->composer('pembelian.form',function($view){
            $view->with('list_kelas',Kelas::pluck('nama_kelas','id'));
        });
    }

    
    // public function register()
    // {
    //     //
    // }
}
