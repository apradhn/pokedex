$(document).ready(function() {
	$('.change').each(function(index) {
		$('.cell-'+(index+1) + ' .change').click(function() {
			$('.cell-'+(index+1)+' .pokeball').css('display', 'none');
			$('.cell-'+(index+1)+' .poke-select').css('display', 'block');
			$('.cell-'+(index+1)+' .selected-pokemon').css('display', 'none');			
		});		
	});

	$('.fa-times').each(function(index) {
		$('.cell-'+(index+1)+' .fa-times').click(function() {
			$('.cell-'+(index+1)+' .poke-select').css('display', 'none');
			$('.cell-'+(index+1)+' .pokeball').css('display', 'block');			
		})
	});

	$('.search').each(function(index) {
		$('.search.cell-'+(index+1)).click(function() {
			$.ajax({
				type: 'GET',
				url: '/pokemon/team-search',
				error: function(data) {
					console.log(data);
				},
				success: function(response) {
		        	console.log("success-html");
					$('.search-results.cell-'+(index+1)).html(response);
				},
				data: {
					format: 'html', 
					query: $('.cell-'+(index+1)+' input[name=query]').val(),
				},
			});			
		});
	});

	$('.select').each(function(index) {
		$('.cell-'+(index+1)+' .select').click(function() {
			$('.cell-'+(index+1)+' .poke-select').css('display', 'none');
			$('.cell-'+(index+1)+' .pokeball').css('display', 'none');

			$.ajax({
				type: 'GET',
				url: '/pokemon/team-selection',
				error: function(data) {
					console.log(data);
				},
				success: function(response) {
		        	console.log("success-html");
					$('.cell-'+(index+1)+' .selected-pokemon').html(response);
					$('.cell-'+(index+1)+' .selected-pokemon').css('display', 'block');
				},
				data: {
					format: 'html', 
					query: $('.cell-'+(index+1)+' .search-results option:selected').val(),
					//_token: $('input[name=_token]').val(),
				},
			});		

		});

	});

/*

	$('.select').click(function() {
		var pokemon = $(".search-results option:selected").val();
		$('.cell-1 .poke-select').css('display', 'none');
		
		$.ajax({
			type: 'GET',
			url: '/pokemon/team-selection',
			error: function(data) {
				console.log(data);
			},
			success: function(response) {
	        	console.log("success-html");
				$('.selected-pokemon.cell-1').html(response);
				$('.selected-pokemon.cell-1').css('display', 'block');
			},
			data: {
				format: 'html', 
				query: $(".search-results option:selected").val(),
				//_token: $('input[name=_token]').val(),
			},
		});		
	});
*/
});



