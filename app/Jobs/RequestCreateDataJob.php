<?php

namespace App\Jobs;



use App\Models\RadioApiData;
use App\Service\RadioService;
use App\Service\RadioTimeService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;


class RequestCreateDataJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 5;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(RadioService $radioService,RadioTimeService $radioTimeService)
    {
        //get radio count
        $radioCount= Http::withHeaders([
            'x-rapidapi-host'=>'radio-browser.p.rapidapi.com',
            'x-rapidapi-key'=>'91340408bbmsh0e8a7e3cc82fcaep154b2ejsn3ed97dc1f618'
        ])->get('https://radio-browser.p.rapidapi.com/json/stats');

        $radioCount = json_decode($radioCount->body(),true);

        //update all radio count

        $createOrUpdate = is_null(RadioApiData::find(1)) ? RadioApiData::create(['current_offset'=>0,'all_radio_count'=>$radioCount['stations']]) :
        RadioApiData::find(1)->update(['all_radio_count'=>$radioCount['stations']]);

        $apiData = RadioApiData::find(1);

        //get radios
        $request = Http::withHeaders([
            'x-rapidapi-host'=>'radio-browser.p.rapidapi.com',
            'x-rapidapi-key'=>'91340408bbmsh0e8a7e3cc82fcaep154b2ejsn3ed97dc1f618'
        ])->get('https://radio-browser.p.rapidapi.com/json/stations',[
            'offset'=>$apiData['current_offset'],
            'limit'=>1000
            ]);

        $radios = json_decode($request->body(),true);



       // check if data has any issue
        if (is_null($radios)) {
            $this->fail('response is null' . $request->status() . $request);
        }


            //create or update radio
            foreach ($radios as $radio){
                $radioId = $radioService->updateOrCreate($radio);

                $radioTime = $radioTimeService->updateOrCreate($radio,$radioId->id);
            }

            $apiData->current_offset += 1000;
            $apiData->save();

            if ($apiData->current_offset <= $apiData->all_radio_count){
                 RequestCreateDataJob::dispatch()->onQueue('update');
            }else{
                $apiData->current_offset = 0;
                $apiData->save();
            }


    }
}
