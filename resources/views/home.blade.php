@extends('_master')

@section('content')
<div class="row">
	<div class="col-sm-4 col-md-offset-4">
		<form class="form">
			<div class="form-group">
				<input type="text" class="form-control" id="search" placeholder="Name...">
			</div>
			<button type="submit" id="submit" class="btn btn-default">Search</button>
		</form>
	</div>
</div>
@stop