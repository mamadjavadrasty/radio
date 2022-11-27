<?php

namespace App\Jobs;


use App\Models\Radio;
use App\Service\RadioService;

use App\Service\RadioTimeService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class NewCreateRadioJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 5;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $uuid;

    public function __construct($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(RadioService $radioService,RadioTimeService $radioTimeService)
    {
        $request = Http::withHeaders([
            'x-rapidapi-host'=>'radio-browser.p.rapidapi.com',
            'x-rapidapi-key'=>'91340408bbmsh0e8a7e3cc82fcaep154b2ejsn3ed97dc1f618'
        ])->get('https://radio-browser.p.rapidapi.com/json/stations/byuuid',[
            'uuids'=>$this->uuid,
        ]);

        $radio = json_decode($request,true);
        $radio = $radio[0];

        // check if data has any issue
        if (is_null($radio)) {
            $this->fail('response is null' . $request->status() . $request);
        }

        $Radio = $radioService->updateOrCreate($radio);

        $radioTime = $radioTimeService->updateOrCreate($radio,$Radio->id);


    }

}
