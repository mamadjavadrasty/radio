<?php

namespace App\Jobs;


use App\Models\SyncRadio;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SyncRadioJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $syncRadios = SyncRadio::all();

        if (!empty($syncRadios)) {
            foreach ($syncRadios as $syncRadio) {
               NewCreateRadioJob::dispatch($syncRadio->uuid)->onQueue('high');
            }
        }
    }
}
