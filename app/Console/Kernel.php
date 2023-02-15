<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Http\Controllers\DataController;
use App\Http\Controllers\JsonController;
use App\Models\Wisa\DataModel;

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
        // Get all users
        // Run once per week on Sundays at 12 PM...
        $schedule->call(function () {
            $dataController = new DataController();
            return $dataController->saveToCache();
        })->weekly()->sundays()->at('23:59'); // This will run every sunday at 23:59
        // })->everyMinute(); // -> Only for testing purposes.

        // Import data
        // Run once per month
        $schedule->call(function () {
            $JsonController = new JsonController();
            $data = DataModel::all();

            $JsonController->functions($data);
            $JsonController->entities($data);
            $JsonController->teams($data);
            $JsonController->regions($data);
        })->weekly()->sundays()->at('23:59'); // This will run every sunday at 23:59
        // })->everyMinute(); // -> Only for testing purposes.
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
