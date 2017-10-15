@extends('layouts.master')

@section('header')
	
	<h2>
		Name cat : @if(isset($cat)) {{ $cat->name }} @endif 
		
	</h2>
	
@endsection

@section('content')
	<p>Date of Birth: {{ $cat -> date_of_birth }}</p>
	<p>
		@if($cat->breed)
			Breed <a href="{{ url('cat_breed/'.$cat->breed->name) }}">{{ $cat->breed->name }}</a>
		@endif
	</p>
@endsection