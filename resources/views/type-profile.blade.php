@extends('_master')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('public/type-profile.css') }}">
@stop

@section('content')
<div class="container-fluid">
	<div class="panel panel-default col-xs-10 col-xs-offset-1">
		<h2>{{ $type }}</h2>
		<div>
		@foreach ($pokemon as $pm)
			<div>
				{{ $pm->name }}: {{ $pm->type_a }}, {{ $pm->type_b }}
			</div>
		@endforeach
		</div>
	</div>
</div>
@stop