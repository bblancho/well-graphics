<?php

namespace App\Providers;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        setlocale(LC_TIME, 'fr_FR.utf8', 'fr');

        Route::resourceVerbs([
            'create' => 'creer',
            'edit' => 'editer',
        ]);

        Blade::directive('price', function($expression){
            // $newprix = $expression * 100 ;
            // $prix = $newprix / 100;
            return "<?php echo number_format($expression/100, 2, ',', ' ').' €';  ?>" ;
        });

        Blade::directive('datetime', function($expression) {
            return "<?php echo with{$expression}->format('d/m/Y à H:i'); ?>";
        });
    }
}
