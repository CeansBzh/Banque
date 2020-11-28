<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        Blade::directive('euroFormat', function ($amount) {
            return "<?php echo number_format($amount, 2, ',', ' ') . ' €'; ?>";
        });

        Blade::directive('euroFormatWithSign', function ($amount) {
            return "<?php 
            if($amount >= 0) {
                echo '+' . number_format($amount, 2, ',', ' ') . ' €';
            } else {
                echo number_format($amount, 2, ',', ' ') . ' €';
            }
            ?>";
        });
    }
}
