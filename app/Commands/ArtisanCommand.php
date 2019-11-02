<?php

namespace App\Commands;

use App\User;
use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class ArtisanCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'extras';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Demo of extra function ';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // $name = $this->ask('what is your name ?');
        // $this->info('hallo '. $name);
        // $password = $this->secret('what is your password ?');
        // $this->info('hallo '. $password);
        // if($this->confirm('Are You Sure ?')){
        //     $this->info('are you answared yes');
        //     exit();
        // }
        // $this->info('this have answare no');

        // $this->anticipate('what is your name', [
        //     'nanas','nono','tindev','caiheck'
        // ]);

        $headers = ['id','name'];
        $data    = [['hem','nanas'],['yea','nano'],['ok','tin']];
        $users   = User::all(['id','name'])->toArray();
        $this->table($headers,$users);

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
