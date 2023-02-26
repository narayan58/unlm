<?php

namespace App\Providers;
use App\Model\admin\AdminPages;
use App\Model\admin\AdminSetting;
use App\Model\admin\Cart;
use App\Model\admin\Customer;
use App\Model\admin\ProductCategory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        
        view()->composer('*',function($view) {
            $currency_code = 'Rs.';
            $shippingCharge = 100;
            $freeOrderCharge = 3000;
            $sitedetail = AdminSetting::findorfail('1');
            $allProductCategory=ProductCategory::get();
            $showOnHomePages=AdminPages::where('status','1')->where('show_on_homepage','1')->orderBy('created_at','DESC')->get();
            $customer = Auth::guard('customer')->user();

            $view->with('customer', $customer);
            $view->with('sitedetail', $sitedetail);
            $view->with('showOnHomePages', $showOnHomePages);
            $view->with('allProductCategory', $allProductCategory);
            $view->with('currency_code', $currency_code);
            $view->with('shippingCharge', $shippingCharge);
            $view->with('freeOrderCharge', $freeOrderCharge);
        });
    }
}
