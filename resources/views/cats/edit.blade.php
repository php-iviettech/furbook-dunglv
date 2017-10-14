@extends('layouts.master')

@section('header')
<h1 class="text-center"> Edit Cat</h1>

@endsection

@section('content')
<h2>Infor Cat</h2>
<p>Name: <span class="lead">{{ $cat['name'] }}</span></p>
<p>Date of birth: <span class="lead">{{ $cat['date_of_birth'] }}</span></p>

@foreach($breed as $breeds)
	@if($cat['breed_id'] == $breeds['id'])
		<p>Breed: <span class="lead">{{ $breeds['name'] }}</span></p>
	@endif
@endforeach
<hr>
@include('errors.Error')
<form action="" method="POST">
	{{ csrf_field() }}
	<p class="lead">Name edit:</p>
	<input type="text" class="form-control" name="cat_edit_name" placeholder="Name Edit">
	<p class="lead">Date edit:</p>
	<input type="date" class="form-control" name="cat_edit_date" placeholder="Date Edit mm/dd/yyy">
	<p class="lead"> Breed Edit</p>
	<select class="form-control" name="cat_edit_breed">
			@foreach($breed as $list_breed)
			<option value="{{ $list_breed['id'] }}">{{ $list_breed['name'] }}</option>
			@endforeach
	</select>
	<input type="submit" class="form-control btn btn-primary" name="" value="Edit">
</form>
@endsection