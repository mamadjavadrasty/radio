<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RadioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'change_uuid'=>$this->change_uuid,
            'station_uuid'=>$this->station_uuid,
            'server_uuid'=>$this->server_uuid,
            'name'=>$this->name,
             'url'=>$this->url,
            'url_resolved'=>$this->url_resolved,
            'homepage'=>$this->homepage,
            'favicon'=>$this->favicon,
             'tags'=>$this->tags,
            'country'=>$this->country,
            'country_code'=>$this->country_code,
            'iso_3166_2'=>$this->iso_3166_2,
             'state'=>$this->state,
            'language'=>$this->language,
            'language_codes'=>$this->language_codes,
            'votes'=>$this->votes,
            'click_count'=>$this->click_count,
            'click_trend'=>$this->click_trend,
            'last_change_time'=>$this->radioTime->last_change_time,
            'last_change_time_iso8601'=>$this->radioTime->last_change_time_iso8601,
            'codec'=>$this->codec,
            'bitrate'=>$this->radioTime->bitrate,
            'hls'=>$this->radioTime->hls,
            'last_checkok'=>$this->radioTime->last_checkok,
            'last_check_time_iso8601'=>$this->radioTime->last_check_time_iso8601,
            'last_checkok_time'=>$this->radioTime->last_checkok_time,
            'last_checkok_time_iso8601'=>$this->radioTime->last_checkok_time_iso8601,
            'last_local_check_time'=>$this->radioTime->last_local_check_time,
            'last_local_check_time_iso8601'=>$this->radioTime->last_local_check_time_iso8601,
            'click_timestamp'=>$this->radioTime->click_timestamp,
            'ssl_error'=>$this->radioTime->ssl_error,
            'geo_lat'=>$this->radioTime->geo_lat,
            'geo_long'=>$this->radioTime->geo_long,
            'has_extended_info'=>$this->radioTime->has_extended_info,
           'uuid'=>$this->uuid,
        ];
    }

    
}
