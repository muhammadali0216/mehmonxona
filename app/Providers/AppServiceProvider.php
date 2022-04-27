<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Room;
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
        view()->composer('site.sections.intro', function($view){
            $rooms=Room::where('checkbox','1')->get();
            $view->with(compact('rooms'));
        });
        view()->composer('site.sections.about', function($view){
            $about=About::first();
            $view->with(compact('about'));
        });
        view()->composer('layouts.siteLayoute', function($view){
            $contact=Contact::first();
            $view->with(compact('contact'));
        });
    }
}
