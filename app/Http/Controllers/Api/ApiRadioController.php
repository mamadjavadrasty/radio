<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiGetClickCountRequest;
use App\Http\Requests\Api\ApiRadioRequest;
use App\Http\Resources\RadioCountryResource;
use App\Http\Resources\RadioLanguageResource;
use App\Http\Resources\RadioResource;
use App\Http\Resources\RadioTagsResource;
use App\Models\Radio;
use Illuminate\Http\Request;

class ApiRadioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ApiRadioRequest $request)
    {
        $query = Radio::query();

        $parameter = $request->input('params');
        $parameter = json_decode($parameter,true);

        if (isset($parameter['name'])){
            $query->where('name','LIKE' , '%'  . $parameter['name']. '%');
        }

        if (isset($parameter['country'])){
            $query->where('country','LIKE', '%'.$parameter['country'].'%');
        }

        if (isset($parameter['tags'])){
            $query->where('tags','LIKE', '%'.$parameter['tags'].'%');
        }

        if (isset($parameter['language'])){
            $query->where('language','LIKE', '%'.$parameter['language'].'%');

        }


        $radios = $query->offset($parameter['offset'] ?? 0)->limit($parameter['limit'] ?? 100)->get();


        $status = count($radios) > 0 ? true : false;
        return response()->json(['result'=>$status,'list'=>RadioResource::collection($radios)]);
       // return RadioResource::collection($radios);

    }


    public function country(Request $request)
    {
        $params = $request->input('params');
        $params = json_decode($params,true);
        $radios = Radio::where('country','!=','')->orderBy('country')->offset($params['offset'] ?? 0)->limit($params['limit'] ?? 100)->get();

        //unique is country
        $radios = $radios->unique('country');

        $status = count($radios) > 0 ? true : false;

        return response()->json(['result'=>$status,'list'=>RadioCountryResource::collection($radios)]);
        //return RadioCountryResource::collection($radios);
    }

    public function tags(Request $request)
    {
        $params = $request->input('params');
        $params = json_decode($params,true);
        $radios = Radio::where('tags','!=','')->where('tags','NOT LIKE','%'.','.'%')->orderBy('tags')->offset($params['offset'] ?? 0)->limit($params['limit'] ?? 100)->get();

        //unique is tags
        $radios = $radios->unique('tags');

        $status = count($radios) > 0 ? true : false;

        return response()->json(['result'=>$status,'list'=>RadioTagsResource::collection($radios)]);
       // return RadioTagsResource::collection($radios);
    }

    public function language(Request $request)
    {
        $params = $request->input('params');
        $params = json_decode($params,true);

        $radios = Radio::where('language','!=','')->where('language','NOT LIKE','%'.','.'%')->orderBy('language')->offset($params['offset'] ?? 0)->limit($params['limit'] ?? 100)->get();

        //unique is language
        $radios = $radios->unique('language');

        $status = count($radios) > 0 ? true : false;

        return response()->json(['result'=>$status,'list'=>RadioLanguageResource::collection($radios)]);
       // return RadioLanguageResource::collection($radios);
    }


    public function clickCount(Request $request)
    {
        $params = $request->input('params');
        $params = json_decode($params,true);
        $radios = Radio::orderByDesc('click_count')->offset($params['offset'] ?? 0)->limit($params['limit'] ?? 100)->get();;

        $status = count($radios) > 0 ? true : false;
        return response()->json(['result'=>$status,'list'=>RadioResource::collection($radios)]);
      //  return RadioResource::collection($radios);
    }


    public function getClickCount(ApiGetClickCountRequest $request)
    {
        $params = $request->input('params');
        $params = json_decode($params,true);
        $radio = Radio::where('uuid','LIKE','%'.$params['uuid'].'%')->first();
        $clickCount = ['clickCount'=>$radio->click_count ?? false];
        $status = !empty($radio) ? true : false;
        return response()->json(['result'=>$status,'list'=>$clickCount]);
    }

    public function votes(Request $request)
    {
        $params = $request->input('params');
        $params = json_decode($params,true);
        $radios = Radio::orderByDesc('votes')->offset($params['offset'] ?? 0)->limit($params['limit'] ?? 100)->get();;

        $status = count($radios) > 0 ? true : false;
        return response()->json(['result'=>$status,'list'=>RadioResource::collection($radios)]);
     //   return RadioResource::collection($radios);
    }




    public function trending(Request $request)
    {
        $parameters = $request->input('params');
        $parameters = json_decode($parameters,true);
        $limit = $parameters['limit'] ?? 100;
        $offset = $parameters['offset'] ?? 0;
        $query = Radio::query();


        unset($parameters['limit']);
        unset($parameters['offset']);

        foreach ($parameters as $key => $value){
            $query->where($key,'LIKE','%'.$value.'%');
        }

        $radios = $query->offset($offset)->limit($limit)->get();;
        $status = count($radios) > 0 ? true : false;

      return response()->json(['result'=>$status,'list'=>RadioResource::collection($radios)]);
//    return RadioResource::collection($radios)->additional(['result'=>$status]);
    }

    public function getSingleRadio(Request $request)
    {

        $parameters = json_decode($request->params,true);
        $radio = Radio::where('uuid',$parameters['uuid'])->get();

        $status = !is_null($radio) ? true : false ;
        return response()->json(['result'=>$status,'list'=>RadioResource::collection($radio)]);
    }

}
