<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RadioTime extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_change_time',
        'last_change_time_iso8601',
        'bitrate',
        'hls',
        'last_checkok',
        'last_check_time',
        'last_check_time_iso8601',
        'last_checkok_time',
        'last_checkok_time_iso8601',
        'last_local_check_time',
        'last_local_check_time_iso8601',
        'click_timestamp',
        'click_timestamp_iso8601',
        'ssl_error',
        'geo_lat',
        'geo_long',
        'has_extended_info',
        'radio_id'
    ];

    public function radioTime()
    {
        return $this->hasOne(RadioTime::class,'radio_id');
    }
}
