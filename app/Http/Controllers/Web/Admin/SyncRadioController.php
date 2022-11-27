<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\SyncRadioRequest;
use App\Jobs\RequestCreateDataJob;
use App\Models\Job;
use App\Models\SyncRadio;
use Illuminate\Http\Request;

class SyncRadioController extends Controller
{
    public function index()
    {
        $syncRadios = SyncRadio::orderByDesc('created_at')->get();
        $updateJob = Job::where('queue','update')->first();
        return view('admin.update.index',compact('syncRadios','updateJob'));
    }

    public function request()
    {
        RequestCreateDataJob::dispatch()->onQueue('update');

        return back()->with('success','The request was successfully submitted');
    }

    public function store(SyncRadioRequest $request)
    {

        $uuid = $request->uuid;
        SyncRadio::create(['uuid' => $uuid]);

        return back()->with('success','Successfully added to list');
    }

    public function destroy($id)
    {
        SyncRadio::find($id)->delete();

        return back()->with('success','Record successfully deleted');
    }
}
