$('#search-html').click(function() {
	var image = "img/pokeball.gif"
	/*$('.loading').show();
	$('.loading').html("<img src="+image+" />");*/
    $.ajax({
        type: 'POST',
        url: '/pokemon/search',
        error: function(data) {
        	console.log(data);
        },
        success: function(response) { 
        	/*$('.loading').html("").hide();*/
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