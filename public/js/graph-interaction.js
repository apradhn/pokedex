$(document).ready(function() {
	var pokemon = [];

	for(var i = 0; i < data.length; i++) {
		pokemon[i] = nameData[i];
	}

	console.log(pokemon);

	var test = Snap('#svg');

	var paths = test.selectAll("g.pm path");

	var circles = test.selectAll("circle");

	for (var i=0, j=0; i < circles.length; i+=6, j++) {
		circles[i].addClass(pokemon[j]);
		circles[i+1].addClass(pokemon[j]);
		circles[i+2].addClass(pokemon[j]);
		circles[i+3].addClass(pokemon[j]);
		circles[i+4].addClass(pokemon[j]);
		circles[i+5].addClass(pokemon[j]);
	}

	for (var i = 0; i < pokemon.length; i++) {
		highlight(pokemon[i]);
	}

	function highlight(pm) {
		$("div."+pm).click(function() {
			$(this).toggleClass("selected");
			var path = test.select("path."+pm);
			path.toggleClass("highlight");
			var circles = test.selectAll("circle."+pm);
			console.log(circles);
			for(var i=0; i< circles.length; i++) {
				circles[i].toggleClass("highlight-circle");
			}
			//circle.toggleClass("highlight-circle");

		});
	}

});