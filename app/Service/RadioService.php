<?php

namespace App\Service;

use App\Models\Radio;
use Illuminate\Support\Str;

class RadioService
{
    public function updateOrCreate($radio)
    {
        $radio = Radio::updateOrCreate(
            ['station_uuid'=>$radio['stationuuid'],'name'=>$radio['name']],
            [
                'change_uuid'=>$radio['changeuuid'],
                'station_uuid'=>$radio['stationuuid'],
                'server_uuid'=>$radio['serveruuid'],
                'name'=>$radio['name'],
                'url'=>$radio['url'],
                'url_resolved'=>$radio['url_resolved'],
                'homepage'=>$radio['homepage'],
                'favicon'=>$radio['favicon'],
                'tags'=>$radio['tags'],
                'country'=>$radio['country'],
                'country_code'=>$radio['countrycode'],
                'iso_3166_2'=>$radio['iso_3166_2'],
                'state'=>$radio['state'],
                'language'=>$radio['language'],
                'language_codes'=>$radio['languagecodes'],
                'votes'=>$radio['votes'],
                'click_count'=>$radio['clickcount'],
                'click_trend'=>$radio['clicktrend'],
                'codec'=>$radio['codec'],
                'uuid'=>Str::uuid()->toString(),
            ]
        );

        return $radio;
    }
}
