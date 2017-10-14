@extends('layouts.master')

 @section('header')
	<h1>Create A Cat Success</h1>

 @stop
 @section('content')
	<h2>Infor Of New Cat</h2>
	<h3>Name : <span class="lead">{{ $cat_name }}</span></h3>
	<h3>Date of birth : <span class="lead">{{ $cat_date }}</span> </h3>
	<h3>Breed  : <span class="lead">{{ $breed_name['name'] }}</span> </h3>
	<h2><a href="{{ url('/cats/create') }}"> Create Another Cat</a></h2>
 @stop