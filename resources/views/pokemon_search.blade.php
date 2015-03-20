@extends('_master')

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