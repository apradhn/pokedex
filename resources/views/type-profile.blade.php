@extends('_master')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/type-profile.css') }}">
@stop

@section('navigation')
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="http://www.apradhan.me/">Abhijit Pradhan</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="/">Search Pokédex</a></li>
				    <li class="active"><a href="/data-visualizations">Data Visualizations<span class="sr-only">(current)</span></a></li>
				</ul>
			</div>
		</div>
	</nav>
@stop

@section('content')
<link rel="stylesheet" href="//rawgithub.com/Caged/d3-tip/master/examples/example-styles.css">

<div class="container-fluid">
	<div class="panel panel-default col-sm-12 col-lg-10 col-lg-offset-1"> 
		<h2>{{ $type }}</h2>
		<p>Select a Pokémon to highlight their stats on the graph.</p>
		<div class="col-sm-2 sidebar">
			<script>
			var data = [];
			</script>

			<?php $count = 0; $single_type = 0; $dual_type = 0; $hp_total = 0; 
				  $attack_total = 0; $defense_total = 0; $sp_atk_total = 0; 
				  $sp_def_total = 0; $speed_total = 0;
			?>		

			@foreach ($pokemon as $pm)
			<div class="poke-cell {{ $pm->name }} {{ $type }}">
				<?php $total = $pm->attack + $pm->defense + $pm->sp_atk + $pm->sp_def + $pm->speed ?>
				<div>
					<span class="name">{{ $pm->name }}</span><br>
					<span class="{{ $pm->type_a }}">{{ $pm->type_a }}</span> <span class="{{ $pm->type_b }}">{{ $pm->type_b }}</span>
				</div>			

				@if ($pm->type_b == "")
					<?php $single_type++; ?>
				@else 
					<?php $dual_type++; ?>
				@endif
				
				<?php 
				$hp_total += $pm->hp;
				$attack_total += $pm->attack;
				$defense_total += $pm->defense;
				$sp_atk_total += $pm->sp_atk;
				$sp_def_total += $pm->sp_def;
				$speed_total += $pm->speed;
				$count++; 
				?>
				<script>
				data.push(<?php echo json_encode($pm) ?>);
				</script>
			</div>
			@endforeach
		</div>		
		<?php
		$hp_avg = round($hp_total / $count);
		$attack_avg = round($attack_total / $count);
		$defense_avg = round($defense_total / $count);
		$sp_atk_avg = round($sp_atk_total / $count);
		$sp_def_avg = round($sp_def_total / $count);
		$speed_avg = round($speed_total / $count);
		?>
		<div class="col-sm-10 average">
			<div class="statistic">
				<div class="number">{{ $hp_avg }}</div>
				<div>Average HP</div>
			</div>
			<div class="statistic">
				<div class="number">{{ $attack_avg }}</div>
				<div>Average Attack</div>
			</div>
			<div class="statistic">
				<div class="number">{{ $defense_avg }}</div>
				<div>Average Defense</div>
			</div>
			<div class="statistic">
				<div class="number">{{ $sp_atk_avg }}</div>
				<div>Average Sp. Atk</div>
			</div>
			<div class="statistic">
				<div class="number">{{ $sp_def_avg }}</div>
				<div>Average Sp. Def</div>
			</div>
			<div class="statistic">
				<div class="number">{{ $speed_avg }}</div>
				<div>Average Speed</div>
			</div>												
		</div>	

	
		<div class="col-sm-10">
			<div id="data"></div>
		</div>

		<div class="col-sm-10">
			<div class="statistic">
				<div class="number">{{ $count }}</div>
				<div>{{ $type }} Pokémon</div>
			</div>
			<div class="statistic">
				<div class="number">{{ $single_type }}</div>
				<div>Single Types</div>
			</div>
			<div class="statistic">
				<div class="number">{{ $dual_type }}</div>
				<div>Dual Types</div>
			</div>
		</div>	
	</div>
</div>
<script src="{{ asset('js/d3.v3.min.js') }}"></script>
<script src="http://labratrevenge.com/d3-tip/javascripts/d3.tip.v0.6.3.js"></script>
<script src="{{ asset('js/scatter-plot.js') }}"></script>
<script src="{{ asset('js/graph-interaction.js') }}"></script>
@stop