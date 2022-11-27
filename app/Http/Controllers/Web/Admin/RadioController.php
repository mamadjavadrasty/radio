<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\RadioIndexRequest;
use App\Http\Requests\Web\Admin\RadioStoreRequest;
use App\Models\Radio;
use App\Models\RadioTime;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RadioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RadioIndexRequest $request)
    {
        $query = Radio::query();



        if ($request->name){
            $query->where('name','LIKE' , '%'  . $request->name. '%');

        }

        if ($request->tags){
            $query->where('tags','LIKE' , '%'  . $request->tags.'%');
        }

        if ($request->country){
            $query->where('country' ,'LIKE' , '%'  .  $request->country.'%');
        }

        if ($request->language){
            $query->where('language' ,'LIKE' , '%'  . $request->language.'%');
        }

        if ($request->click_count){
            $query->where('click_count' , $request->click_count);
        }

        if ($request->last_update){
            $query->where('updated_at','>',$request->last_update);
        }

        $radios = $query->orderByDesc('created_at')->paginate(15);


        return view('admin.radio.index',compact('radios'));
    }


    public function create()
    {
        return view('admin.radio.create');
    }

    public function store(RadioStoreRequest $request)
    {
        $inputs = $request->all();
        $inputs['uuid'] = Str::uuid()->toString();
        $radio = Radio::create($inputs);

        $inputs['radio_id'] = $radio->id;
        $radioTime = RadioTime::create($inputs);

        return redirect()->route('admin.radio.index')->with('success','radio created success fully');
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function details(Radio $radio)
    {

        return view('admin.radio.edit',compact('radio'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Radio $radio)
    {
       $radio->update($request->all());

       $radioTime = RadioTime::find($radio->radioTime->id)->update($request->all());

       return redirect()->route('admin.radio.index')->with('success','radio updated success fully');
    }



}
