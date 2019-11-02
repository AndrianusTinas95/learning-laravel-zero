<?php

namespace App\Commands\Users;

use App\User;
use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class DeleteCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'users:delete { id : id of the user}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Delete User';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        dd($this->tes());
        $user = User::find($this->argument('id'));
        if($user){
            $user->delete();
            $this->info('User Deleted');
            $this->notify('Delete','User Deleted','./public/img/logo.png');
        }else{
            $this->info(' There is not user with this ID');
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
