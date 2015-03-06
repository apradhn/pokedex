<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title', 'Minimal Pokédex')</title>
		<meta charset="utf-8">
		<meta name="description" content="Simple and fast Pokédex">
		<meta name="keywords" content="pokedex, pokemon, pokémon, pokédex">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">		
		<!-- Google Fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<!-- Latest compiled and minified Bootstrap CSS --> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<!-- Font Awesome icons --> 
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/search.css') }}">
		@yield('head')
	</head>

	<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="http://apradhan.me/">Abhijit Pradhan</a>
			</div>
		</div>
	</nav>
	<div class="jumbotron">
		<div class="container">
			<h1>Minimal Pokédex<br>
			<small>Fast and simple UI for looking up a Pokémon's base stats and type defenses</small></h1>			
		</div>
	</div>

	<div class="container-fluid content">
	@yield('content')
	</div>
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>	
    @yield('footer') 
	</body>
</html>