@extends('layouts.master')
@section('header')
<h1 class="text-center">Edit Success</h1>
@endsection
@section('content')
<h2>Edit Success cat with infor:</h2>
<p>Name: <span class="lead">{{ $cat_edit_name }}</span></p>
<p>Date of birth: <span class="lead">{{ $cat_edit_date }}</span></p>
<p>Breed Name: <span class="lead">{{ $breed_name['name']}}</span></p>

@endsection