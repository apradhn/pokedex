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
				    <li><a href="/team-builder">Team Builder</a></li>
				</ul>
			</div>
		</div>
	</nav>
@stop

@section('content')
<div class="container-fluid">
	<div class="row chart-nav">
		<div class="col-sm-10">
			<a href="types/Normal"><div class="col-xs-2 col-sm-2 Normal">Normal</div></a>
			<a href="types/Fire"><div class="col-xs-2 col-sm-2 Fire">Fire</div></a>
			<a href="types/Water"><div class="col-xs-2 col-sm-2 Water">Water</div></a>
			<a href="types/Electric"><div class="col-xs-2 col-sm-2 Electric">Electric</div></a>
			<a href="types/Grass"><div class="col-xs-2 col-sm-2 Grass">Grass</div></a>
			<a href="types/Ice"><div class="col-xs-2 col-sm-2 Ice">Ice</div></a>
			<a href="types/Fighting"><div class="col-xs-2 col-sm-2 Fighting">Fighting</div></a>
			<a href="types/Poison"><div class="col-xs-2 col-sm-2 Poison">Poison</div></a>
			<a href="types/Ground"><div class="col-xs-2 col-sm-2 Ground">Ground</div></a>
			<a href="types/Flying"><div class="col-xs-2 col-sm-2 Flying">Flying</div></a>
			<a href="types/Psychic"><div class="col-xs-2 col-sm-2 Psychic">Psychic</div></a>
			<a href="types/Bug"><div class="col-xs-2 col-sm-2 Bug">Bug</div></a>
			<a href="types/Rock"><div class="col-xs-2 col-sm-2 Rock">Rock</div></a>
			<a href="types/Ghost"><div class="col-xs-2 col-sm-2 Ghost">Ghost</div></a>
			<a href="types/Dragon"><div class="col-xs-2 col-sm-2 Dragon">Dragon</div></a>
			<a href="types/Dark"><div class="col-xs-2 col-sm-2 Dark">Dark</div></a>
			<a href="types/Steel"><div class="col-xs-2 col-sm-2 Steel">Steel</div></a>
			<a href="types/Fairy"><div class="col-xs-2 col-sm-2 Fairy">Fairy</div></a>
		</div>
	</div>

<div class="container-fluid content">
	<div class="row">
		<div class="col-lg-6">
			<h3>Search by Name</h3>

			<!-- <label for='query'>Search:</label> -->
			<div class="form-group col-sm-6 col-lg-8">
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