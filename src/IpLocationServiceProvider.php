<?php
namespace TimeShow\IpLocation;

use Illuminate\Support\ServiceProvider;

class IpLocationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(IpLocation::class, function (){
            return new IpLocation();
        });

        $this->app->alias(IpLocation::class, 'IpLocation');
    }

    public function provides()
    {
        return [IpLocation::class, 'IpLocation'];
    }

}