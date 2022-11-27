<?php

namespace App\Http\Requests\Web\Admin;

use Illuminate\Foundation\Http\FormRequest;

class RadioIndexRequest extends FormRequest
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
            'name'=>['nullable','string'],
            'tags'=>['nullable','string'],
            'country'=>['nullable','string'],
            'language'=>['nullable','string'],
            'click_count'=>['nullable','numeric'],
            'last_update'=>['nullable'],
        ];
    }

}
