<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\NewCreateRadioJob;
use Illuminate\Http\Request;

class SearchRadioController extends Controller
{
    public function index()
    {
        return view('admin.new-radio-search');
    }

    public function request($uuid)
    {
        NewCreateRadioJob::dispatch($uuid);

        return back()->with('success','The request was successfully submitted');
    }
}
