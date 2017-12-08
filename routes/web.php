<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $now = Carbon\Carbon::now();
    $alerts = App\Alert::where('effectiveDate', '<=', $now)->where('expirationDate', '>=', $now)->get();
    $links = App\Link::all();
    return view('homepage')->with('alerts', $alerts)->with('links',$links);
});

Route::get('/test', function(){
  return view('links');
});

Route::resource('links', 'LinkController');

Route::resource('alerts', 'AlertController');

Route::get('thumbnail/retreve/{id}', 'ThumbnailController@retreve');
