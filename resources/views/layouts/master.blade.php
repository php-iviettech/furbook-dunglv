<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Furbook</title>
	<link rel="stylesheet" href="{{ asset('css\app.css') }}">
</head>
<body>
	<div class="container">
		<div class="page-header">
		@yield('header')
		<a href="{{ url('/') }}">View All Cat</a> --- 
		<a href="{{ url('/cats/create') }}">Create New Cat	</a>
		</div>
		@if(Session::has('success'))
		<div class="alert alert-success">
			{{ Session::get('success') }}
		</div>
		@endif
		@yield('content')
	</div>
</body>
</html>