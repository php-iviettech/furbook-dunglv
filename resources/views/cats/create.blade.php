@extends('layouts.master')

@section('header')
	<h1 class="text-center"> Create A New Cat</h1>

@endsection

@section('content')
	@include('errors.Error')
	<form action="" method="post">
		{{ csrf_field() }}
		<p class="lead"> Name of Cat</p>
		<input class="form-control" type="text" name="cat_name" placeholder="Name Of Cat">
		<p class="lead" >Date of Birth</p>
		<input class="form-control" type="date" name="cat_date" placeholder="Date of Birth mm/dd/yyyy">
		<p class="lead">Breed</p>
		<select class="form-control" name="cat_breed">
			@foreach($breeds as $list_breed)
			<option value="{{ $list_breed['id'] }}">{{ $list_breed['name'] }}</option>
			@endforeach
		</select>
		<input class="form-control btn btn-primary"  type="submit" name="cat_create" value="Create A New Cat">
	</form>

@endsection
