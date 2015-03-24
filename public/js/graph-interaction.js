$(document).ready(function() {
	var pokemon = [];

	var type = $('#type-data').html();
	console.log(type);

	for(var i = 0; i < data.length; i++) {
		pokemon[i] = nameData[i];
	}

	console.log(pokemon);

	var test = Snap('#svg');

	var paths = test.selectAll("g.pm path");

	var circles = test.selectAll("circle");

	// adds Pokmeon name class to circles
	for (var i=0, j=0; i < circles.length; i+=6, j++) {
		circles[i].addClass(pokemon[j]);
		circles[i+1].addClass(pokemon[j]);
		circles[i+2].addClass(pokemon[j]);
		circles[i+3].addClass(pokemon[j]);
		circles[i+4].addClass(pokemon[j]);
		circles[i+5].addClass(pokemon[j]);
	}

	// highlights the line depending on the pokemon selected
	for (var i = 0; i < pokemon.length; i++) {
		highlight(pokemon[i]);
	}

	$("path.Slaking").click(function() {
		var path = test.select("path.Slaking");
		path.addClass("Normal");
		var circles = test.selectAll("circle.Slaking");
		for(var i=0; i< circles.length; i++) {
			circles[i].toggleClass(type);
		}		
		
	});


	function highlight(pm) {
		$("div."+pm).click(function() {
			$(this).toggleClass("selected");
			var path = test.select("path."+pm);
			path.toggleClass("highlight");
			path.toggleClass(type);
			var circles = test.selectAll("circle."+pm);
			console.log(circles);
			for(var i=0; i< circles.length; i++) {
				circles[i].toggleClass("highlight-circle");
				circles[i].toggleClass(type);
			}

		});

		$("path."+pm).click(function() {
			var path = test.select("path."+pm);
			path.toggleClass(type);
			var circles = test.selectAll("circle."+pm);
			for(var i=0; i< circles.length; i++) {
				circles[i].toggleClass(type);
			}
			$("div."+pm).toggleClass("selected");
		});

		$("path."+pm).hover(
			function() {
				var circles = test.selectAll("circle."+pm);
				for(var i=0; i< circles.length; i++) {
					circles[i].addClass("mouse-over");
				}
			},
			function() {
				var circles = test.selectAll("circle."+pm);
				for(var i=0; i< circles.length; i++) {
					circles[i].removeClass("mouse-over");
				}				
			}
		);

		$("circle."+pm).hover(
			function() {
				var path = test.select("path."+pm);
				path.addClass("mouse-over");
			},
			function() {
				var path = test.select("path."+pm);
				path.removeClass("mouse-over");				
			}
		);
	}

});