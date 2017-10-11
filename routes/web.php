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
    return 'All Cats';
});
Route::get('/cats/{id}',function ($id){
    return "all cats #${id}";
})-> where('id','[0-9]+');
Route::get('/aboute',function(){
	$corp = ' iviettech';
//	return view('about',['corp'=>$corp]);
    return view('about')->with('corp',$corp);
});
