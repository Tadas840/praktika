<?php

namespace App\Console;

use App\Models\Cattle;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
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
        $schedule->call(function () {
            $today=Carbon::today()->toDateString();
            DB::table('cattle')
                ->where('Tipas', '=',Cattle::CATTLE_TYPE_3)
                ->where('VersData','=',$today)
                ->update(['Tipas' => Cattle::CATTLE_TYPE_1]);
        })->everyMinute();
    
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
