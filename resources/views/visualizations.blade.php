@extends('_master')

@section('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/visualizations.css') }}">
@stop

@section('navigation')
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-pokedex">
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
					<li><a href="/">Search Pokédex</a></li>
				    <li class="active"><a href="/data-visualizations">Data Visualizations<span class="sr-only">(current)</span></a></li>
				    <li><a href="/team-builder">Team Builder</a></li>				    
				</ul>
			</div>
		</div>
	</nav>
@stop

@section('content') 
	<div class="container-fluid">
		<div class="panel panel-default col-sm-10 col-sm-offset-1">
			<div class="row">
				<div class="col-sm-6">
					<h2>Data Visualizations</h2>
				</div>
			</div>
			<div class="row viz-list">
				<div class="col-sm-6">
					<p>Visualizes the base stats for Pokémon of a specific type across an interactive scatter plot.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9 type-list">
					<div class="col-xs-2 col-sm-3 Normal type"><a href="/types/Normal">Normal</a></div>
					<div class="col-xs-2 col-sm-3 Fire type"><a href="/types/Fire">Fire</a></div>
					<div class="col-xs-2 col-sm-3 Water type"><a href="/types/Water">Water</a></div>
					<div class="col-xs-2 col-sm-3 Electric type"><a href="/types/Electric">Electric</a></div>
					<div class="col-xs-2 col-sm-3 Grass type"><a href="/types/Grass">Grass</a></div>
					<div class="col-xs-2 col-sm-3 Ice type"><a href="/types/Ice">Ice</a></div>
					<div class="col-xs-2 col-sm-3 Poison type"><a href="/types/Poison">Poison</a></div>
					<div class="col-xs-2 col-sm-3 Ground type"><a href="/types/Ground">Ground</a></div>
					<div class="col-xs-2 col-sm-3 Flying type"><a href="/types/Flying">Flying</a></div>
					<div class="col-xs-2 col-sm-3 Psychic type"><a href="/types/Psychic">Psychic</a></div>
					<div class="col-xs-2 col-sm-3 Bug type"><a href="/types/Bug">Bug</a></div>
					<div class="col-xs-2 col-sm-3 Rock type"><a href="/types/Rock">Rock</a></div>
					<div class="col-xs-2 col-sm-3 Ghost type"><a href="/types/Ghost">Ghost</a></div>
					<div class="col-xs-2 col-sm-3 Dragon type"><a href="/types/Dragon">Dragon</a></div>
					<div class="col-xs-2 col-sm-3 Dark type"><a href="/types/Dark">Dark</a></div>
					<div class="col-xs-2 col-sm-3 Steel type"><a href="/types/Steel">Steel</a></div>
					<div class="col-xs-2 col-sm-3 Fairy type"><a href="/types/Fairy">Fairy</a></div>

				</div>
			</div>
		</div>
	</div>
@stop