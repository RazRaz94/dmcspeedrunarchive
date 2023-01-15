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
//Any% Category
Route::get('/DMC1:Any%', function() {
    return view('pages.DMC1.DMC1AnyPercent');
});

//Single News
Route::get('/news/{id}', function($id){
    return view('news', [
      'news' => News::find($id)  
    ]);
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