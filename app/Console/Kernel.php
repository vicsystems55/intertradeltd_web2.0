<?php

namespace App\Console;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();

        $schedule->call(function(){

            // Http::get(config('app.url').'api/aggregate_points');

            Artisan::call('config:cache');

            Artisan::call('cache:clear');

            Artisan::call('route:cache');



             info('cache cleared');

         })->everyFiveMinutes();

         $schedule->call(function(){

            Http::get(config('app.url').'api/fire-campaign');

            info('email campaign fired');


         })->daily();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
