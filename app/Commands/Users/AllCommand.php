<?php

namespace App\Commands\Users;

use App\User;
use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class AllCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'users:all';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'All Users';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $users = User::select('id','name')->get();
        $this->info('All User : ');
        foreach ($users as $key => $user) {
            $this->info("ID : $user->id == name : $user->name ");
        }
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
