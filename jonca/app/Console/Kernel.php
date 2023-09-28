<?php

namespace App\Console;

use Commands\DailyQuote;
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
protected $commands =[
    'App\Console\Commands\ToptenCmd',
    'App\Console\Commands\CaCommand'
];
     

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('topten:daily')
        ->cron('0 23 * * 1-5');
        $schedule->command('ca:daily')
        ->cron('0 23 * * 1-5');
        // $schedule->call('App\Http\Controllers\MainController@cronCa')->cron('0 23 * * 1-5');
        // $schedule->call('App\Http\Controllers\MainController@toptenCron')->cron('0 23 * * 1-5');
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
