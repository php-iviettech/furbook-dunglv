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
<<<<<<< HEAD
    return "all cats";
});
Route::get('/cats/{id}',function( $id){
	return "cats $id";
})-> where('id','[0-9]+') ;
Route::get('/about',function(){
	$corp = 'iviettech';
	return view('about')->with('corp',$corp);
});
=======
	$breeds = Furbook\Breed::all();
	$cats = Furbook\Cat::all();
    return view('index')-> with('breeds',$breeds)->with('cats',$cats);
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
	return view('cats.Breed')->with('breed',$breed)->with('cats',$breed -> cats);    
});

Route::get('cat_view/{id}',function($id){
	$cat = Furbook\Cat::find($id);
	//dd($cat);		
	return view('cats.show',compact('cat'));			
})-> where('id','[0-9]+');

Route::get('cats/create',function(){
	$breeds = Furbook\Breed::all();
	return view('cats.create',compact('breeds'));
});
Route::post('cats/create','HandlerController@Create_Cat');

Route::get('/Success',function(){
	return view('cats.create-success');
});
Route::get('cats/edit/{id}',function($id){
	$cat = Furbook\Cat::find($id);
	$breed = Furbook\Breed::all();
	return view('cats.edit',compact('cat','breed'));
});
Route::post('cats/edit/{id}','HandlerController@Edit_Cat');

Route::get('cats/delete','HandlerController@Delete_Cat');
>>>>>>> develop
