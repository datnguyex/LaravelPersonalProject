<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\CustomerUser;
use App\Models\Product;
use App\Models\Category;
use App\Models\Seller;
use App\Models\Comment;
use App\Models\Admin;
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
        View::composer('header', function ($view) {
            if(session()->has('emailSeller')) {
                $email = session('emailSeller');
                $customerUser = Seller::where('email', $email)->first();
                $view->with('customerUser', $customerUser);
            }
            else if(session()->has('emailCustomerUser')) {
                $email = session('emailCustomerUser');
                $customerUser = CustomerUser::where('email', $email)->first();
                $view->with('customerUser', $customerUser);
            }
            else if(session()->has('emailAdmin')) {
                $email = session('emailAdmin');
                $customerUser = Admin::where('email', $email)->first();
                $view->with('customerUser', $customerUser);
            }
            
        });
        View::composer('auth.account.header', function ($view) {
            if(session()->has('emailSeller')) {
                $email = session('emailSeller');
                $customerUser = Seller::where('email', $email)->first();
                $view->with('customerUser', $customerUser);
            }
            else if(session()->has('emailCustomerUser')) {
                $email = session('emailCustomerUser');
                $customerUser = CustomerUser::where('email', $email)->first();
                $view->with('customerUser', $customerUser);
            }
            else if(session()->has('emailAdmin')) {
                $email = session('emailAdmin');
                $customerUser = Admin::where('email', $email)->first();
                $view->with('customerUser', $customerUser);
            }
        });
    }
}
