// Demo 1) Getting JSON data as a result and letting JS decide where to put the data on the page
$('#search-json').click(function() {
	console.log("search-json clicked");
	$.ajax({
		type: 'POST',
		url: '/pokemon/search',
		error: function(data) {
			var test = "hello world";
			console.log(data);
		},
		success: function(response) {
			console.log("success-json");
			// Clear the results from the last query
			$('#results').html('');

			// Parse through the response
			$.each(response, function( index, value ) {
				var name = response[index]['name'];

				$('#results').append(name);
				/*
				var name = response[index]['name'];
				var type_a = response[index]['type_a'];
				var type_b = response[index]['type_b'];
				var type_a = response[index]['type_a'];
				var sprite_url = response[index]['sprite_url'];
				var hp = response[index]['hp'];
				var attack = response[index]['attack'];
				var defense = response[index]['defense'];
				var sp_atk = response[index]['sp_atk'];
				var sp_def = response[index]['sp_def'];
				var speed = response[index]['speed'];
				
				$('#results').append(name + "<br>" + type_a + " " + type_b + "<br>" +sprite_url
					+ "<br>" + "hp: " + hp + " attack: " + attack + " Sp. Atk: " + sp_atk
					+ " Sp. Def: " + sp_def + " Speed: " + speed);
				*/

			});
		},
		data: {
			format: 'json',
			query: $('input[name=query]').val(),
			_token: $('input[name=_token]').val(),
		},
	});
});

// Demo 2) Getting HTML/A View as a result and just throwing it in to the response div
$('#search-html').click(function() {
    $.ajax({
        type: 'POST',
        url: '/pokemon/search',
        error: function(data) {
        	console.log(data);
        },
        success: function(response) { 
        	console.log("success-html");
            $('#results').html(response);
        },
        data: {
            format: 'html',
            query: $('input[name=query]').val(),
            _token: $('input[name=_token]').val(),
        },
    }); 
});