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
					<li><a href="/">Search Pokédex</a></li>
				    <li><a href="/data-visualizations">Data Visualizations</a></li>
				    <li class="active"><a href="/team-builder">Team Builder<span class="sr-only">(current)</span></a></li>
				</ul>
			</div>
		</div>
	</nav>
@stop
