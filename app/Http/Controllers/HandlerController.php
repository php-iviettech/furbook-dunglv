<?php

namespace Furbook\Http\Controllers;


use Furbook\Http\Requests\CreateCat ;
use Furbook\Http\Requests\Validate_Edit ;
use Illuminate\Http\Request;
use DB;
use Furbook\Breed as Breed;



class HandlerController extends Controller
{
    public function Create_Cat(Request $Request,CreateCat $Error){
    	$cat_name = $Request->cat_name;
    	$cat_date = $Request->cat_date;
    	$cat_breed = $Request->cat_breed;
    	//return view('cats.create')
    	$breed_name = Breed::find($cat_breed);
    	DB::table('cats')->insert([
    		'name'=>$cat_name,
    		'date_of_birth' => $cat_date,
    		'breed_id'=>$cat_breed
    	]);
    	return view('cats.create-success',compact('cat_name','cat_date','breed_name'));

    }
    public function Delete_Cat(Request $Request){
        $id = $Request->id;
        DB::table('cats')->where('id',$id)->delete();
        return redirect()->to('/');

    }
    public function Edit_Cat(Request $Request,Validate_Edit $error){
        $cat_edit_name = $Request -> cat_edit_name;
        $cat_edit_date = $Request -> cat_edit_date;
        $cat_edit_breed = $Request -> cat_edit_breed;
        $cat_edit_id = $Request -> id;
        $breed_name = Breed::find($cat_edit_breed);
        DB::table('cats')->where('id',$cat_edit_id)
        ->update(['name'=>$cat_edit_name,'date_of_birth'=>$cat_edit_date,'breed_id'=>$cat_edit_breed]);
        return view('cats.edit-success',compact('cat_edit_name','cat_edit_date','cat_edit_id','breed_name'));   
    }
}
