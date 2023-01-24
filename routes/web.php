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

//DMC1 Pages
//Index
Route::get('/DMC1', [DMC1::class, 'index']);
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