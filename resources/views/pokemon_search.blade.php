@extends('_master')

@section('content')
	<h1>Search with Ajax</h1>

	<label for='query'>Search:</label>
	<input type='text' id='query' name='query' value='pokemon'><br><br>

	{!! Form::token() !!}
	<button id='search-json'>Search and get JSON back</button><br><br>
	<button id='search-html'>Search and get HTML back</button>

	<div id='results'></div>
@stop

@section('footer')
	<script src="/js/search.js"></script>
@stop