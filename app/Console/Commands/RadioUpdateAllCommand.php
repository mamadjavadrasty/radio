<?php

namespace App\Console\Commands;

use App\Jobs\RequestCreateDataJob;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class RadioUpdateAllCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'radio:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'dispatch RequestUpdateData';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // check if status is on
        if (!DB::table('settings')->where('key','=','update_status')->first()->value) {
            $this->line('Off');
            return Command::FAILURE;
        }

        // check if queue update
        $updateJob =DB::table('jobs')->where('queue','=','update')->first();
        if (!is_null($updateJob)) {
            $this->line('Off');
            return Command::FAILURE;
        }

        // if jobs table contain more than 200 job it will fail because of managing job number.
        if(DB::table('jobs')->count() > 200){
            $this->line('Jobs is so higher than 200');
            return Command::FAILURE;
        }


        if (!RequestCreateDataJob::dispatch()->onQueue('update')){
            $this->error('dispatch failed');
        }
        $this->line('ok');
        return Command::SUCCESS;
    }
}
