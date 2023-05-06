<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\News;
use App\Http\Controllers\DMC1;

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

//Home Page
Route::get('/', function() {
    return view('pages.Home');
});

Route::get('/helpout', function() {
    return view('pages.HelpOut');
});

Route::get('/community', function() {
    return view('pages.Community');
});

Route::get('/NewsArchive', function() {
    return view('pages.NewsArch');
});

Route::get('/Info', function() {
    return view('pages.Info');
});

//DMC Index Pages
Route::get('/DMC1', [DMC1::class, 'index']);
Route::get('/DMC2', function() {
    return view('pages.DMC2.DMC2Index');
});
Route::get('/DMC3', function() {
    return view('pages.DMC3.DMC3Index');
});
Route::get('/DMC4', function() {
    return view('pages.DMC4.DMC4Index');
});
Route::get('/DmC', function() {
    return view('pages.DMCDMC.DMCDMCIndex');
});
Route::get('/DMC5', function() {
    return view('pages.DMC5.DMC5Index');
});

//DMC1 Pages - Start
//Getting Started
Route::get('/DMC1:Getting_Started', function() {
    return view('pages.DMC1.DMC1GettingStarted');
});
//DMC1 FAQ
Route::get('/DMC1:Frequently_Asked_Questions', function() {
    return view('pages.DMC1.DMC1FAQ');
});

//DMC1 Categories
//Any% Category
Route::get('/DMC1:Any', function() {
    return view('pages.DMC1.DMC1AnyPercent');
});
//100% Category
Route::get('/DMC1:All', function() {
    return view('pages.DMC1.DMC100Percent');
});
//All Collectibles
Route::get('/DMC1:AC', function() {
    return view('pages.DMC1.DMC1AllCollectibles');
});
//Low% Category
Route::get('/DMC1:Low', function() {
    return view('pages.DMC1.DMC1LowPercent');
});

//DMC1 Bosses
Route::get('/DMC1:Phantom', function() {
    return view('pages.DMC1.DMC1Phantom');
});
Route::get('/DMC1:Griffon', function() {
    return view('pages.DMC1.DMC1Griffon');
});
Route::get('/DMC1:Nelo', function() {
    return view('pages.DMC1.DMC1Nelo');
});
Route::get('/DMC1:Nightmare', function() {
    return view('pages.DMC1.DMC1Nightmare');
});

//DMC1 Turbo
Route::get('/DMC1:Turbo', function() {
    return view('pages.DMC1.DMC1Turbo');
});

//DMC1 Pages End -

//DMC2 Pages - Start

//Dante Information
Route::get('/DMC2:Dante', function() {
    return view('pages.DMC2.DMC2Dante');
});

//Lucia Information
Route::get('/DMC2:Lucia', function() {
    return view('pages.DMC2.DMC2Lucia');
});

//Trish Information
Route::get('/DMC2:Trish', function() {
    return view('pages.DMC2.DMC2Trish');
});

//Amulets
Route::get('/DMC2:Amulets', function() {
    return view('pages.DMC2.amulets');
});

//Enemies
Route::get('/DMC2:Enemy', function() {
    return view('pages.DMC2.DMC2Enemies');
});

//Style Orb Calculation
Route::get('/DMC2:Formulas', function() {
    return view('pages.DMC2.DMC2StyleOrb');
});

//S Rank Criteria
Route::get('/DMC2:SRank', function() {
    return view('pages.DMC2.DMC2SRank');
});

//Single News
Route::get('/news/{id}', function($id){
    return view('news', [
      'news' => News::find($id)  
    ]);
});

//Tools & Utilities

//Input Display
Route::get('/Input_Displays', function() {
    return view('pages.Utilities.InputDisplays');
});



/* Route::get('/hello', function(){
    return response('<h1>Hello World</h1>', 200);
});

Route::get('/posts/{id}', function($id){
    return response('Post' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request){
    dd($request->name .' ' . $request->city);
}); */