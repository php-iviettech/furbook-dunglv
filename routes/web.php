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
    return "all cats";
});
Route::get('/cats/{id}',function( $id){
	return "cats $id";
})-> where('id','[0-9]+') ;
Route::get('/about',function(){
	$corp = 'iviettech';
	return view('about')->with('corp',$corp);
});