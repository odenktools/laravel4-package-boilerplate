
@extends('coolcms::admin.layouts.master')

@section('mainContent')

	<h2>{{ $route_name }}</h2>
	
	<div>
		@foreach ($data as $row)
			{{ $row->menu_title }}
		@endforeach
	<div>
	
@stop