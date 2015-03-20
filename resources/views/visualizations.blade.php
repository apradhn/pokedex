@extends('_master')

@section('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/visualizations.css') }}">
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
					<h3><a class="Normal" href="/types/Normal">Normal</a></h3>
					<p>Visualizes the base stats for all Normal type Pokémon across an interactive scatter plot.</p>
				</div>
				<div class="col-sm-6">
					<h3><a class="Fire" href="/types/Fire">Fire</a></h3>
					<p>Visualizes the base stats for all Fire type Pokémon across an interactive scatter plot.</p>					
				</div>
				<div class="col-sm-6">
					<h3><a class="Water" href="/types/Water">Water</a></h3>
					<p>Visualizes the base stats for all Water type Pokémon across an interactive scatter plot.</p>					
				</div>
				<div class="col-sm-6">
					<h3><a class="Electric" href="/types/Electric">Electric</a></h3>
					<p>Visualizes the base stats for all Electric type Pokémon across an interactive scatter plot.</p>					
				</div>
				<div class="col-sm-6">
					<h3><a class="Grass" href="/types/Grass">Grass</a></h3>
					<p>Visualizes the base stats for all Grass type Pokémon across an interactive scatter plot.</p>					
				</div>	
				<div class="col-sm-6">
					<h3><a class="Ice" href="/types/Ice">Ice</a></h3>
					<p>Visualizes the base stats for all Ice type Pokémon across an interactive scatter plot.</p>					
				</div>	
				<div class="col-sm-6">
					<h3><a class="Fighting" href="/types/Fighting">Fighting</a></h3>
					<p>Visualizes the base stats for all Fighting type Pokémon across an interactive scatter plot.</p>					
				</div>		
				<div class="col-sm-6">
					<h3><a class="Poison" href="/types/Poison">Poison</a></h3>
					<p>Visualizes the base stats for all Poison type Pokémon across an interactive scatter plot.</p>					
				</div>
				<div class="col-sm-6">
					<h3><a class="Ground" href="/types/Ground">Ground</a></h3>
					<p>Visualizes the base stats for all Ground type Pokémon across an interactive scatter plot.</p>					
				</div>
				<div class="col-sm-6">
					<h3><a class="Flying" href="/types/Flying">Flying</a></h3>
					<p>Visualizes the base stats for all Flying type Pokémon across an interactive scatter plot.</p>					
				</div>
				<div class="col-sm-6">
					<h3><a class="Psychic" href="/types/Psychic">Psychic</a></h3>
					<p>Visualizes the base stats for all Psychic type Pokémon across an interactive scatter plot.</p>					
				</div>
				<div class="col-sm-6">
					<h3><a class="Bug" href="/types/Bug">Bug</a></h3>
					<p>Visualizes the base stats for all Bug type Pokémon across an interactive scatter plot.</p>					
				</div>
				<div class="col-sm-6">
					<h3><a class="Rock" href="/types/Rock">Rock</a></h3>
					<p>Visualizes the base stats for all Rock type Pokémon across an interactive scatter plot.</p>					
				</div>
				<div class="col-sm-6">
					<h3><a class="Ghost" href="/types/Ghost">Ghost</a></h3>
					<p>Visualizes the base stats for all Ghost type Pokémon across an interactive scatter plot.</p>					
				</div>
				<div class="col-sm-6">
					<h3><a class="Dragon" href="/types/Dragon">Dragon</a></h3>
					<p>Visualizes the base stats for all Dragon type Pokémon across an interactive scatter plot.</p>					
				</div>
				<div class="col-sm-6">
					<h3><a class="Dark" href="/types/Dark">Dark</a></h3>
					<p>Visualizes the base stats for all Dark type Pokémon across an interactive scatter plot.</p>					
				</div>
				<div class="col-sm-6">
					<h3><a class="Steel" href="/types/Steel">Steel</a></h3>
					<p>Visualizes the base stats for all Steel type Pokémon across an interactive scatter plot.</p>					
				</div>
				<div class="col-sm-6">
					<h3><a class="Fairy" href="/types/Fairy">Fairy</a></h3>
					<p>Visualizes the base stats for all Fairy type Pokémon across an interactive scatter plot.</p>					
				</div>

			</div>
		</div>
	</div>
@stop