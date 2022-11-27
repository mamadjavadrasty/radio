<?php

namespace App\Service;

use App\Models\RadioTime;

class RadioTimeService
{
    public function updateOrCreate($radio,$radioId)
    {
        $radio = RadioTime::updateOrCreate(
            ['radio_id'=>$radioId],
            [
                'last_change_time'=>date('Y-m-d h:i:s', strtotime($radio['lastchangetime'])),
                'last_change_time_iso8601'=>date('Y-m-d h:i:s', strtotime($radio['lastchangetime_iso8601'])),
                'bitrate'=>$radio['bitrate'],
                'hls'=>$radio['hls'],
                'last_checkok'=>$radio['lastcheckok'],
                'last_check_time'=>date('Y-m-d h:i:s', strtotime($radio['lastchecktime'])),
                'last_check_time_iso8601'=>date('Y-m-d h:i:s', strtotime($radio['lastchecktime_iso8601'])),
                'last_checkok_time'=>date('Y-m-d h:i:s', strtotime($radio['lastcheckoktime'])),
                'last_checkok_time_iso8601'=>date('Y-m-d h:i:s', strtotime($radio['lastcheckoktime_iso8601'])),
                'last_local_check_time'=>date('Y-m-d h:i:s', strtotime($radio['lastlocalchecktime'])),
                'last_local_check_time_iso8601'=>date('Y-m-d h:i:s', strtotime($radio['lastlocalchecktime_iso8601'])),
                'click_timestamp'=>date('Y-m-d h:i:s', strtotime($radio['clicktimestamp'])),
                'click_timestamp_iso8601'=>date('Y-m-d h:i:s', strtotime($radio['clicktimestamp_iso8601'])),
                'ssl_error'=>$radio['ssl_error'],
                'geo_lat'=>$radio['geo_lat'],
                'geo_long'=>$radio['geo_long'],
                'has_extended_info'=>$radio['has_extended_info'],
                'radio_id'=>$radioId
            ]
        );
    }
}
