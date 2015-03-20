@extends('_master')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('css/search.css') }}">
@stop

@section('navigation')
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" 
		      data-toggle="collapse" data-target="#navbar-pokedex">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="http://www.apradhan.me/">Abhijit Pradhan</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar-pokedex">
				<ul class="nav navbar-nav">
					<li class="active"><a href="/">Search Pokédex<span class="sr-only">(current)</span></a></li>
				    <li><a href="/data-visualizations">Data Visualizations</a></li>
				</ul>
			</div>
		</div>
	</nav>
@stop

@section('content')
<div class="container-fluid content">
	<div class="row">
		<div class="col-lg-6">
			<h3>Search by Name</h3>

			<!-- <label for='query'>Search:</label> -->
			<div class="form-group col-sm-4 col-lg-6">
				<input type='text' id='query' name='query' placeholder='Electrode, Diglett, Nidoran, Mankey...' class="form-control">
				{!! Form::token() !!}
			</div>


			<!-- <button id='search-json'>Search and get JSON back</button><br><br> -->

			<!-- Search by HTML button -->
			<button id='search-html' class="btn btn-default">Go</button>

		</div>
	</div>

	<div class="row loading-row">
		<div class="loading center-block"></div>
	</div>
</div>
	<div id='results'></div>
@stop

@section('footer')
	<script src="/js/search.js"></script>
@stop