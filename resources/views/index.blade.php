

@extends('layouts.master')

@section('header')
<h1 class="text-center">All Cat</h1>

@endsection



@section('content')

<table class="table table-hover">
	<thead>
		<tr>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Date of Birth</td>
			<td>Breed Name</td>
			<td>Action</td>
			<td>Action</td>
		</tr>
		
		@foreach($cats as $cat)

			<?php
				if ($cat['breed_id'] == 1) {
					$breed_name='Domestic';
				} elseif($cat['breed_id'] == 2) {
					$breed_name='Persian';
				} elseif ($cat['breed_id'] == 3) {
					$breed_name='Siamese';
				}elseif ($cat['breed_id'] == 4) {
					$breed_name='Abyssinian';
				}
			?>
			
		<tr>
			<td>{!! $cat['id'] !!}</td>
			<td>{!! $cat['name'] !!}</td>
			<td>{!! $cat['date_of_birth'] !!}</td>			
			<td><a href="{{ url('/cat_breed/'.$breed_name) }}">{{ $breed_name }}</a></td>
			<td><a href="{{ url('cats/edit/'.$cat['id']).'?id_cat='.$cat['id'] }}"> Edit</a></td>
			<td><a href="{{ url('cats/delete?id='.$cat['id']) }}"> Delete</a></td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection
