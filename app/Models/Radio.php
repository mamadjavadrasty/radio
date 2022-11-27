<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Radio extends Model
{
    use HasFactory;

    protected $fillable = [
        'change_uuid',
        'station_uuid',
        'server_uuid',
        'name',
        'url',
        'url_resolved',
        'homepage',
        'change_uuid',
        'favicon',
        'tags',
        'country',
        'country_code',
        'iso_3166_2',
        'state',
        'language',
        'language_codes',
        'votes',
        'click_count',
        'click_trend',
        'uuid',
        'codec',
    ];

    public function radioTime()
    {
        return $this->hasOne(RadioTime::class,'radio_id');
    }

}
