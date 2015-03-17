@extends('_master')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/type-profile.css') }}">

@stop

@section('content')
<link rel="stylesheet" href="//rawgithub.com/Caged/d3-tip/master/examples/example-styles.css">

<div class="container-fluid">
	<div class="panel panel-default col-xs-10 col-xs-offset-1"> 
		<h2>{{ $type }}</h2>
		<div class="col-sm-2">
			<script>
			var data = [];
			</script>		
		@foreach ($pokemon as $pm)
			<?php $total = $pm->attack + $pm->defense + $pm->sp_atk + $pm->sp_def + $pm->speed ?>
			<div>
				{{ $pm->name }}: {{ $pm->type_a }}, {{ $pm->type_b }}
			</div>
			<div class="total">{{ $pm->attack }} {{ $pm->defense }} {{ $pm->sp_atk }} {{ $pm->sp_def }} {{ $pm->speed }}</div>
			<script>
			data.push(<?php echo json_encode($pm) ?>);
			</script>
			
		@endforeach
		</div>
		<div class="col-sm-10">
			<div id="data">
			
			</div>
		</div>
	</div>
</div>
<script src="{{ asset('js/d3.v3.min.js') }}"></script>
<script src="http://labratrevenge.com/d3-tip/javascripts/d3.tip.v0.6.3.js"></script>
<script src="{{ asset('js/scatter-plot.js') }}"></script>

@stop