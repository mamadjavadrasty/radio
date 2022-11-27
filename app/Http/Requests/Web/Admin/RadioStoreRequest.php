<?php

namespace App\Http\Requests\Web\Admin;

use Illuminate\Foundation\Http\FormRequest;

class RadioStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'change_uuid'=>'required|uuid',
            'station_uuid'=>'required|uuid',
            'server_uuid'=>'nullable|uuid',
            'name'=>'required|string',
            'url'=>'required|url',
            'url_resolved'=>'required|url',
            'homepage'=>'nullable|url',
            'favicon'=>'nullable|url',
            'tags'=>'nullable|string',
            'country'=>'required|string',
            'country_code'=>'required|string',
            'iso_3166_2'=>'nullable',
            'state'=>'nullable|string',
            'language'=>'nullable|string',
            'language_codes'=>'nullable|string',
            'votes'=>'required|numeric',
            'click_count'=>'required|numeric',
            'click_trend'=>'required|numeric',
            'codec'=>'required|string',
            'last_change_time'=>'required|date',
            'last_change_time_iso8601'=>'required|date',
            'bitrate'=>'required|numeric',
            'hls'=>'required|numeric',
            'last_checkok'=>'required|numeric',
            'last_check_time'=>'required|date',
            'last_check_time_iso8601'=>'required|date',
            'last_checkok_time'=>'required|date',
            'last_checkok_time_iso8601'=>'required|date',
            'last_local_check_time'=>'required|date',
            'last_local_check_time_iso8601'=>'required|date',
            'click_timestamp'=>'required|date',
            'click_timestamp_iso8601'=>'required|date',
            'ssl_error'=>'required|numeric',
            'geo_lat'=>'nullable|numeric',
            'geo_long'=>'nullable|numeric',
            'has_extended_info'=>'required|numeric',
        ];
    }
}
