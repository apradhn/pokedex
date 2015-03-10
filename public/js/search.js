// Demo 1) Getting JSON data as a result and letting JS decide where to put the data on the page
/*
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
			});
		},
		data: {
			format: 'json',
			query: $('input[name=query]').val(),
			_token: $('input[name=_token]').val(),
		},
	});
});
*/

// Demo 2) Getting HTML/A View as a result and just throwing it in to the response div
$('#search-html').click(function() {
	var image = "img/throbber.gif"
	$('#loading').html("<img src="+image+" />");
    $.ajax({
        type: 'POST',
        url: '/pokemon/search',
        error: function(data) {
        	console.log(data);
        },
        success: function(response) { 
        	$('#loading').html("").hide();
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