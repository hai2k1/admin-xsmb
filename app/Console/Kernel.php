<?php

namespace App\Console;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
        Commands\check_kqxs::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param Schedule $schedule
     *
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('kqxs:check "Siêu Tốc 45 Giây" st45g')->daily();
        $schedule->command('kqxs:check "Siêu Tốc 1 Phút" st1p')->daily();
        $schedule->command('kqxs:check "Miền Bắc" miba')->daily();
        $schedule->command('kqxs:check "Hà Nội" hano')->daily();
        $schedule->command('kqxs:check "Bạc Liêu" bali')->daily();

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
