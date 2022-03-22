<?php

namespace App\Providers;

use App\Models\BedNumber;
use App\Models\RoomNumber;
use App\Repositores\AboutRepositore;
use App\Repositores\AgentRepositore;
use App\Repositores\ContactRepositore;
use App\Repositores\Interfaces\AboutRepositoreInterface;
use App\Repositores\Interfaces\AgentRepositoreInterface;
use App\Repositores\Interfaces\ContactRepositoreInterface;
use App\Repositores\Interfaces\RoomRepositoreInterface;
use App\Repositores\Interfaces\ServicesRepositoreInterface;
use App\Repositores\RoomRepositore;
use App\Repositores\ServicesRepositore;
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
        $this->app->bind(RoomRepositoreInterface::class, RoomRepositore::class);
        $this->app->bind(AboutRepositoreInterface::class, AboutRepositore::class);
        $this->app->bind(AgentRepositoreInterface::class, AgentRepositore::class);
        $this->app->bind(ContactRepositoreInterface::class, ContactRepositore::class);
        $this->app->bind(ServicesRepositoreInterface::class, ServicesRepositore::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.siteLayoute', function($view){
            $roomnumbers=RoomNumber::all();
            $view->with(compact('roomnumbers'));
        });
        view()->composer('layouts.siteLayoute', function($view){
            $beds=BedNumber::all();
            $view->with(compact('beds'));
        });
    }
}
