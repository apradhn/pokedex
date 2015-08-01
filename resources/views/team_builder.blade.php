@extends('_master')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('css/team-builder.css') }}">
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

@section('content')
<div class="container-fluid">
	<div class="row page-title">
		<div class="col-sm-12">
			<h2>Team Builder</h2>
			<p>This tool calculates your team's strengths and weaknesses towards different types.</p>
		</div>		
	</div>
	<div class="row">
		<div class="panel col-sm-10 col-sm-offset-1">
			<div class="row content">
				<div class="col-sm-4 cell cell-1">
					<h3>#1</h3>
					<div class="selected-pokemon"></div>
					<div class="poke-select">
						<i class="fa fa-times fa-lg"></i>
						<div class="form-group">
							<input type="text" class="form-control" name="query">
							<!-- {!! Form::token() !!} -->
						</div>
							<button class="btn btn-default search cell-1">Search</button>	
						<select name="options" class="search-results cell-1"></select>
						<button class="btn btn-default select">Select</button>
					</div>	

					<img src="{{ asset('img/pokeball-icon.png') }}" alt="pokéball" class="pokeball">
					<p class="change"><i class="fa fa-pencil"></i> Change</p>
				</div>
				<div class="col-sm-4 cell cell-2">
					<h3>#2</h3>
					<div class="selected-pokemon"></div>
					<div class="poke-select">
						<i class="fa fa-times fa-lg"></i>
						<div class="form-group">
							<input type="text" class="form-control" name="query">
							<!-- {!! Form::token() !!} -->
						</div>
							<button class="btn btn-default search cell-2">Search</button>	
						<select name="options" class="search-results cell-2"></select>
						<button class="btn btn-default select">Select</button>
					</div>	
					<img src="{{ asset('img/pokeball-icon.png') }}" alt="pokéball" class="pokeball">
					<p class="change"><i class="fa fa-pencil"></i> Change</p>					
				</div>
				<div class="col-sm-4 cell cell-3">
					<h3>#3</h3>
					<div class="selected-pokemon"></div>
					<div class="poke-select">
						<i class="fa fa-times fa-lg"></i>
						<div class="form-group">
							<input type="text" class="form-control" name="query">
							<!-- {!! Form::token() !!} -->
						</div>
							<button class="btn btn-default search cell-3">Search</button>	
						<select name="options" class="search-results cell-3"></select>
						<button class="btn btn-default select">Select</button>
					</div>	
					<img src="{{ asset('img/pokeball-icon.png') }}" alt="pokéball" class="pokeball">
					<p class="change"><i class="fa fa-pencil"></i> Change</p>					
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 cell cell-4">
					<h3>#4</h3>
					<div class="selected-pokemon"></div>
					<div class="poke-select">
						<i class="fa fa-times fa-lg"></i>
						<div class="form-group">
							<input type="text" class="form-control" name="query">
							<!-- {!! Form::token() !!} -->
						</div>
							<button class="btn btn-default search cell-4">Search</button>	
						<select name="options" class="search-results cell-4"></select>
						<button class="btn btn-default select">Select</button>
					</div>				
					<img src="{{ asset('img/pokeball-icon.png') }}" alt="pokéball" class="pokeball">
					<p class="change"><i class="fa fa-pencil"></i> Change</p>					
				</div>
				<div class="col-sm-4 cell cell-5">
					<h3>#5</h3>
					<div class="selected-pokemon"></div>
					<div class="poke-select">
						<i class="fa fa-times fa-lg"></i>
						<div class="form-group">
							<input type="text" class="form-control" name="query">
							<!-- {!! Form::token() !!} -->
						</div>
							<button class="btn btn-default search cell-5">Search</button>	
						<select name="options" class="search-results cell-5"></select>
						<button class="btn btn-default select">Select</button>
					</div>						
					<img src="{{ asset('img/pokeball-icon.png') }}" alt="pokéball" class="pokeball">
					<p class="change"><i class="fa fa-pencil"></i> Change</p>					
				</div>
				<div class="col-sm-4 cell cell-6">
					<h3>#6</h3>
					<div class="selected-pokemon"></div>
					<div class="poke-select">
						<i class="fa fa-times fa-lg"></i>
						<div class="form-group">
							<input type="text" class="form-control" name="query">
							<!-- {!! Form::token() !!} -->
						</div>
							<button class="btn btn-default search cell-6">Search</button>	
						<select name="options" class="search-results cell-6"></select>
						<button class="btn btn-default select">Select</button>
					</div>						
					<img src="{{ asset('img/pokeball-icon.png') }}" alt="pokéball" class="pokeball">
					<p class="change"><i class="fa fa-pencil"></i> Change</p>					
				</div>
			</div>			
		</div>
	</div>
</div>
@stop

@section('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js"></script>    
<script src="{{ asset('js/pokemon-team.js') }}"></script>
<script src="{{ asset('js/pokemon_list.js') }}"></script>
<script src="{{ asset('js/team-builder.js') }}"></script>
@stop