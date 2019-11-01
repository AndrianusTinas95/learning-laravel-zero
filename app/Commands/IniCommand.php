<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class IniCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'ini';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Get the currently loaded .ini file';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $ini = shell_exec('php --ini');
        $this->notify("PHP ini file",'Your PHP ini details are now displayed in the terminal','./public/img/logo.png');
        $this->info($ini);
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
