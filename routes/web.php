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
Route::get('/about',function(){
	$corp = ' iviettech';
	$name ='dung';
//	return view('about',['corp'=>$corp]);
//  return view('about')->with('corp',$corp);
    return view('about',compact('corp','name'));
});

Route::get('cat_breed/{name}',function($name){
	$breed = Furbook\Breed::with('cats')
	->whereName($name)
	->first();
	//dd($breed);    
	return view('cats.index')->with('breed',$breed)->with('cats',$breed -> cats);    
});
Route::get('cat_view/{id}',function($id){
	$cat = Furbook\Cat::find($id);
	//dd($cat);		
	return view('cats.show',compact('cat'));			
})-> where('id','[0-9]+');

Route::get('cats/create',function(){
	return view('cats.create');
});


Route::get('/test',function(){
	//dd()
});
