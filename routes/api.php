<?php

use App\Http\Controllers\Api\ApiCategoriesController;
use App\Http\Controllers\Api\ApiEpisodesController;
use App\Http\Controllers\Api\ApiNewPodcastController;
use App\Http\Controllers\Api\ApiPodcastersController;
use App\Http\Controllers\Api\ApiPodcastsController;
use App\Http\Controllers\Api\ApiRadioController;
use App\Http\Controllers\Api\ApiSyncPodcastsController;
use App\Http\Controllers\Web\Admin\NewPodcastSearchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['as' => 'Api.' , 'prefix' => 'v1'],function(){

    Route::prefix('radios')->group(function (){
        Route::post('list',[ApiRadioController::class,'index']);
        Route::post('country_list',[ApiRadioController::class,'country']);
        Route::post('tags_list',[ApiRadioController::class,'tags']);
        Route::post('language_list',[ApiRadioController::class,'language']);
        Route::post('top_like_list',[ApiRadioController::class,'votes']);
        Route::post('top_listen_list',[ApiRadioController::class,'clickCount']);
        Route::post('get_click-count',[ApiRadioController::class,'getClickCount']);
        Route::post('trending_list',[ApiRadioController::class,'trending']);
        Route::post('get_single_radio',[ApiRadioController::class,'getSingleRadio']);
    });

});
