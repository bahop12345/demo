<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Session;
use App\Model\Cart;
use App\Model\Contact;
use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer('*',function($view){
            $view->with([
                'contact'=> Contact::all()
            ]);
        });
        view()->composer('*',function($view){
            $view->with([
                'category'=> Category::all()
            ]);
        });
        
        





    }
}