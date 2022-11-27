<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\SettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $update_setting = Setting::where('key','update_status')->first();
        return view('admin.setting.index',compact('update_setting'));
    }

    public function update(SettingRequest $request,Setting $setting)
    {

        $setting->update($request->all());

        return back();
    }
}
