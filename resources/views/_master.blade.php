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
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Montserrat' rel='stylesheet' type='text/css'>		<!-- Bootstrap --> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<!-- Font Awesome icons --> 
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}">
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->	
	    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.svg.css') }}">
	    <script type="text/javascript" src="{{ asset('js/snap.svg.js') }}"></script>
		@yield('head')
	</head>

	<body>

	@yield('navigation')

	<div class="jumbotron">
		<div class="container">
			<h1>Minimal Pokédex</h1>
			<p>Pokémon <a href="/data-visualizations">data visualizations</a> and a fast &amp; simple search UI</p>

		</div>
	</div>

	@yield('content')

	

	


    @yield('footer') 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</body>
</html>