<?php

namespace Furbook;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $filltable = ['name','date_of_birth','breed_id'];
    public function breed(){
    	return $this->belongsTo('Furbook\Breed');
    }
}
