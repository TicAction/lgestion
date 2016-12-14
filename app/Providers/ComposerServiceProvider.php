<?php

namespace App\Providers;


use App\Kid;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Behavior;
class ComposerServiceProvider extends ServiceProvider
{


    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
          'partials.behavior','App\Http\ViewComposers\BehaviorComposer'
        );

        View::composer(
            'partials.kid', 'App\Http\ViewComposers\KidComposer'
        );
        View::composer(
            'partials.homework', 'App\Http\ViewComposers\HomeworkComposer'
        );
        View::composer(
            'partials.observation', 'App\Http\ViewComposers\ObservationComposer'
        );


//        view()->composer("partials.sidebar",function($view){
//
//            $view->with('birthday',Kid::all());
//        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
