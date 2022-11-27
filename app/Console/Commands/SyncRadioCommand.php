<?php

namespace App\Console\Commands;

use App\Jobs\SyncRadioJob;
use Illuminate\Console\Command;

class SyncRadioCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'radio:sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'dispatch SyncRadioJob';

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
        if(!SyncRadioJob::dispatch()->onQueue('high')){
            $this->error('Something went wrong!');
            return Command::FAILURE;
        }
        $this->line('ok');
        return Command::SUCCESS;
    }
}
