@extends('layouts.master')

@section('header')
	@if(isset($breed))
		<a href="{{ url('/') }}">Back to OverView</a>
	@endif
	<h2>
		Name cat : @if(isset($cat)) {{ $cat->name }} @endif 
		
	</h2>
	<a href="{{ url('cats/'.$cat->id.'/edit') }}" class="glyphicon glyphicon-edit">Edit</a>
	<a href="{{ url('cats/'.$cat->id.'/delete') }}" class="glyphicon glyphicon-trash">Delete</a>
@endsection

@section('content')
	<p>Date of Birth: {{ $cat -> date_of_birth }}</p>
	<p>
		@if($cat->breed)
			Breed <a href="{{ url('cats/breeds/'.$cat->breed->name) }}">{{ $cat->breed->name }}</a>
		@endif
	</p>
@endsection