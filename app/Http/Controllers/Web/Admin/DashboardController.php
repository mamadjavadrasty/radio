<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Radio;
use Illuminate\Http\Request;
use Illuminate\Queue\Jobs\DatabaseJob;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $countRadio = Radio::count();
        $sumClickCount = Radio::sum('click_count');
        $lastUpdated = Radio::orderByDesc('created_at')->first();

        return view('admin.dashboard',compact('countRadio','sumClickCount','lastUpdated'));
    }
}
