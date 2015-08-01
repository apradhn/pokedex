$(document).ready(function() {
	$('#hide-team').click(function() {
		$('#hide-team').css('display', 'none');
		$('#show-team').css('display', 'block');
		$('.pokemon').animate({
			height: "hide",
			opacity: "hide",
		}, 500);
	});

	$('#show-team').click(function() {
		$('#show-team').css('display', 'none');
		$('#hide-team').css('display', 'block');
		$('.pokemon').animate({
			height: "show",
			opacity: "show",
		}, 500);
	});	

	$('#hide-data').click(function() {
		$('#hide-data').css('display', 'none');
		$('#show-data').css('display', 'block');
		$('.team-data').animate({
			height: "hide",
			opacity: "hide",
		}, 500);
	});

	$('#show-data').click(function() {
		$('#show-data').css('display', 'none');
		$('#hide-data').css('display', 'block');
		$('.team-data').animate({
			height: "show",
			opacity: "show",
		}, 500);
	});			

	$('.change span').each(function(index) {
		var cell = '.cell-'+(index+1);
		$(cell+' .change span').click(function() {
			$(cell+' .pokemon').toggle("fast");
			$(cell+' .search-form').toggle("fast", "swing");
		});
	});

	$('.search').each(function(index) {
		var cell = '.cell-'+(index+1);
		$(cell+' .search').click(function() {
			// Validate text input against pokemon list
			var query = $(cell+' input[name=query]').val();
			var matches = getPokemonMatches(query);
			var options = '';
			$.each(matches, function(index, value) {
				options += '<option>'+value+'</option>';
			});
			$(cell+' .search-results').html(options);
		});		
	});

	$('.random').each(function(index) {
		var cell = '.cell-'+(index+1);
		$(cell + ' .random').click(function() {
			var number = Math.floor(Math.random() * (718-1)) + 1;
			var pokemon = '';
			$.each(pokedex, function(key, value) {
				if (number == value) {
					pokemon = key;
				}
			});
			$(cell+' .search-results').html('<option>'+pokemon+'</option>');
		});
	});

// Submits an AJAX request to pokeapi for the selected Pokémon
	$('.select').each(function(index) {
		var cell = '.cell-'+(index+1);
		$(cell+' .select').click(function() {
			var selection = $(cell + " .search-results option:selected").val();
			var id = getNationalNumber(selection);
			
			var xhr = new XMLHttpRequest();
			xhr.open("GET", "http://pokeapi.co/api/v1/pokemon/"+id+"/");		
			xhr.send();
			xhr.addEventListener("readystatechange", function() {
				if (this.readyState == 4 && this.status == 200) {
					var pokemon = JSON.parse(this.response);
					addToTeam(selection, pokemon, cell);
				}
			});
		});
	});	

	$('.calculate').click(function() {
		
		var p1 = new Pokemon($('.cell-1 .name').text(), $('.cell-1 .typeA').text(), $('.cell-1 .typeB').text(), $('.cell-1 .hp').text(), $('.cell-1 .attack').text(), $('.cell-1 .defense').text(), $('.cell-1 .spAtk').text(), $('.cell-1 .spDef').text(), $('.cell-1 .speed').text(), $('.cell-1 .total').text());
		var p2 = new Pokemon($('.cell-2 .name').text(), $('.cell-2 .typeA').text(), $('.cell-2 .typeB').text(), $('.cell-2 .hp').text(), $('.cell-2 .attack').text(), $('.cell-2 .defense').text(), $('.cell-2 .spAtk').text(), $('.cell-2 .spDef').text(), $('.cell-2 .speed').text(), $('.cell-2 .total').text());
		var p3 = new Pokemon($('.cell-3 .name').text(), $('.cell-3 .typeA').text(), $('.cell-3 .typeB').text(), $('.cell-3 .hp').text(), $('.cell-3 .attack').text(), $('.cell-3 .defense').text(), $('.cell-3 .spAtk').text(), $('.cell-3 .spDef').text(), $('.cell-3 .speed').text(), $('.cell-3 .total').text());
		var p4 = new Pokemon($('.cell-4 .name').text(), $('.cell-4 .typeA').text(), $('.cell-4 .typeB').text(), $('.cell-4 .hp').text(), $('.cell-4 .attack').text(), $('.cell-4 .defense').text(), $('.cell-4 .spAtk').text(), $('.cell-4 .spDef').text(), $('.cell-4 .speed').text(), $('.cell-4 .total').text());
		var p5 = new Pokemon($('.cell-5 .name').text(), $('.cell-5 .typeA').text(), $('.cell-5 .typeB').text(), $('.cell-5 .hp').text(), $('.cell-5 .attack').text(), $('.cell-5 .defense').text(), $('.cell-5 .spAtk').text(), $('.cell-5 .spDef').text(), $('.cell-5 .speed').text(), $('.cell-5 .total').text());
		var p6 = new Pokemon($('.cell-6 .name').text(), $('.cell-6 .typeA').text(), $('.cell-6 .typeB').text(), $('.cell-6 .hp').text(), $('.cell-6 .attack').text(), $('.cell-6 .defense').text(), $('.cell-6 .spAtk').text(), $('.cell-6 .spDef').text(), $('.cell-6 .speed').text(), $('.cell-6 .total').text());	
		var myTeam = new Team(p1, p2, p3, p4, p5, p6);
		console.log(myTeam);
		if (myTeam.p1.name == "" || myTeam.p2.name == "" ||  myTeam.p3.name == ""
			&& myTeam.p4.name == "" ||  myTeam.p5.name == "" || myTeam.p6.name == "") {
			alert("Must Select 6 Pokémon");
		} else {
			var averages = myTeam.averageStats();
			displayAverages(averages);
			drawHeatmap(myTeam.typeDefenses(), 'heatmap-defense', 'red');
			drawHeatmap(myTeam.typeOffenses(), 'heatmap-offense', 'green')
			drawBarGraph(averages, 'bar-graph');
			$('.team-data').animate({
			    height: "show",
			    width: "show",
			    opacity: "show"
				}, 500, function() {
					$('.data-tab').css('display', 'block');
				});			
		}

	});
});

function drawHeatmap(data, id, color) {
	var svg = Snap("#"+id);
	var width = document.getElementById(id).getAttribute("width");
	var height = document.getElementById(id).getAttribute("height");
	var cellWidth = Math.ceil(width/6);
	var cellHeight = Math.ceil(height/3);
	var x = 0, y = 0, i = 0;
	if (color == 'red') {
		var colors =  ["#ffffb2","#fed976","#feb24c","#fd8d3c","#fc4e2a","#e31a1c", "#b10026"];
	} else if(color == 'green'){
		var colors = ['#ffffcc', '#d9f0a3', '#addd8e', '#78c679', '#41ab5d', '#238443', '#005a32'];
	}

	$.each(data, function(key, names) {
		var cell = svg.rect(x, y, cellWidth, cellHeight);
		var count = 0;
		if (names.length > 0) {
			count = names.length
		}
		cell.attr({fill: cellColor(count, colors), opacity: 0});
		cell.animate({opacity: 1}, 1500);

		var type = svg.text(x+cellWidth/2, y+cellHeight/2, key);
		var typeValue = svg.text(x+cellWidth/2, y+cellHeight/2+20, count.toString());

		var group = svg.g(cell, type, typeValue);
		if (count < 4) {
			type.attr({fill: '#555555', textAnchor: "middle"});
			typeValue.attr({fill: '#555555', textAnchor: "middle"});
		} else {
			type.attr({fill: '#FFFFFF', textAnchor: "middle"});
			typeValue.attr({fill: '#FFFFFF', textAnchor: "middle"});			
		}

		type.attr({opacity: 0});
		typeValue.attr({opacity: 0});		
		type.animate({opacity: 1}, 1500);
		typeValue.animate({opacity: 1}, 1500);

		cell.mouseover(function(event) {
			var x = event.offsetX;
			var y = event.offsetY;
			var yPos = y;
			var tipHeight = 25*count;
			if (count != 0) {
				if (x > (5/6) * width) {
					if (y > (2/3) * height) {
						var bg = svg.rect(x-75, y-tipHeight, 100, tipHeight+5, 5, 5).attr({fill: '#555555', opacity: 0.5, class: "caption"});
						$.each(names, function(idx, name) {
							svg.text(x-70, yPos-tipHeight+20, name).attr({fill: '#FFFFFF', class: "caption"});
							yPos += 25;
						});								
					} else {
						var bg = svg.rect(x-80, y-20, 100, tipHeight+5, 5, 5).attr({fill: '#555555', opacity: 0.5, class: "caption"});
						$.each(names, function(idx, name) {
							svg.text(x-75, yPos, name).attr({fill: '#FFFFFF', class: "caption"});
							yPos += 25;
						});							
					}
					
				} else if((x < (5/6) * width) && (y > (2/3) * height)) {
					var bg = svg.rect(x+5, y-tipHeight, 100, tipHeight+5, 5, 5).attr({fill: '#555555', opacity: 0.5, class: "caption"});
					$.each(names, function(idx, name) {
						svg.text(x+10, yPos-tipHeight+20, name).attr({fill: '#FFFFFF', class: "caption"});
						yPos += 25;
					});		
				} else {
					var bg = svg.rect(x+5, y-20, 100, tipHeight+5, 5, 5).attr({fill: '#555555', opacity: 0.5, class: "caption"});
					$.each(names, function(idx, name) {
						svg.text(x+10, yPos, name).attr({fill: '#FFFFFF', class: "caption"});
						yPos += 25;
					});						
				}
			
			}

		});
		group.mouseout(function(event) {
			var g = svg.selectAll('.caption');
			if (g != null) { g.remove(); }
			
		});
		if ((i >= 0 && i < 5) || (i > 5 && i < 11) || ( i > 11 && i <= 17)) {
			x += width / 6;
		} else if ((i == 5) || (i == 11)) {
			x = 0;
			y += height / 3;
		}	

		i += 1;

	});

}

function cellColor(value, colors) {
	var cellColor = '';
	switch(value){
		case 0:
			cellColor = colors[0];
			break;
		case 1: 
			cellColor = colors[1];
			break;
		case 2: 
			cellColor = colors[2];
			break;
		case 3: 
			cellColor = colors[3];
			break;
		case 4: cellColor = colors[4];
			break;
		case 5: 
			cellColor = colors[5];
			break;
		case 6: 
			cellColor = colors[6];
			break;
		default:
			cellColor = '#FFFFFF'
			break;
	}
	return cellColor;
}

// draws a bar graph svg given averages object
function drawBarGraph(averages, id) {
	var svg = Snap("#bar-graph");
	var width = document.getElementById(id).getAttribute("width");
	var height = document.getElementById(id).getAttribute("height");
	var max = Math.max(averages.hp, averages.attack, averages.defense, averages.spAtk, averages.spDef, averages.speed);
	var range = (width/2) / max; 
	console.log(range);
	var bg = svg.rect(0, 0, width, height);
	bg.attr({fill: "#ECF0F1"});
	var i = 25;
	$.each(averages, function(key, value) {
		if (key != "total") {
			var label = svg.text(5, i+15, key);
			var bar = svg.rect(65, i, 0, 25);
			bar.attr({fill: "#e74c3c"});
			bar.animate({width:value*range}, 1500);
			var barValue = svg.text(value*range+25, i+17, value);
			barValue.attr({fill: "#FFFFFF", fontSize: 12})	
			i += 50;	
		} else {
			var circle = svg.circle(width*.75, height*.5, 0);
			circle.attr({fill: "#e74c3c"});
			circle.animate({r:75}, 1500);
			var totalLabel = svg.text(width*.75, height*.5-10, key);
			totalLabel.attr({fill: "#FFFFFF", fontSize: 24, textAnchor: "middle", id: "graph-total"});
			var total = svg.text(width*.75, height*.5+20, value);
			total.attr({textAnchor: "middle", fontSize: 24, fill: "#FFFFFF"});
		}
	});
}

// Displays average stats of team
function displayAverages(averages) {
	$('.average-hp').html(averages.hp);
	$('.average-attack').html(averages.attack);
	$('.average-defense').html(averages.defense);
	$('.average-spAtk').html(averages.spAtk);
	$('.average-spDef').html(averages.spDef);
	$('.average-speed').html(averages.speed);
	$('.average-total').html(averages.total);
}

// Adds pokemon to team
function addToTeam(query, pokemon, cell) {
	var name = query;
	var nationalId = pokemon.national_id;
	var hp = pokemon.hp;
	var attack = pokemon.attack;
	var defense = pokemon.defense;				
	var spAtk = pokemon.sp_atk;
	var spDef = pokemon.sp_def;
	var speed = pokemon.speed;
	var total = hp + attack + defense + spAtk + spDef + speed;
	var types = pokemon.types
	var typeA = '';
	var typeB ='';
	if (types.length == 2) {
		typeA = types[0].name;
		typeB = types[1].name;
	} else {
		typeA = types[0].name;
		typeB = "<br>";
	}
	var sprite_url = "/sprites/"+validateURL(pokemon.name)+".png";

	$(cell+' .name').html(name);
	$(cell+' .nationalId').html(nationalId);
	$(cell+' .hp').html(hp);
	$(cell+' .attack').html(attack);
	$(cell+' .defense').html(defense);
	$(cell+' .spAtk').html(spAtk);
	$(cell+' .spDef').html(spDef);
	$(cell+' .speed').html(speed);
	$(cell+' .total').html(total);
	$(cell+' .typeA').html(typeA);
	$(cell+' .typeB').html(typeB);

	$(cell+' .search-form').css('display', 'none');
	$(cell+' .description-none').css('display', 'none');
	$(cell+' .description').css('display', 'block');
	$(cell+' .sprite').css('margin-bottom', '0px');
	$(cell+' .pokemon').animate({
    height: "show",
    width: "show",
    opacity: "show"
	}, 500);
	//$(cell+' .pokemon').css('display', 'block')
	
	
	$(cell+' .sprite').css('background-image', "url("+sprite_url+")");	
}

// Returns an array containing pokemon matching
// the query
function getPokemonMatches (query) {
	matches = [];
	for (var i = 0; i < pokemonList.length; i++) {
		if (pokemonList[i].toLowerCase().match(query.toLowerCase()) != null) {
			matches.push(pokemonList[i]);
		} 
	};
	return matches;
}

// Returns national number for selected pokemon
function getNationalNumber(pokemon) {
	number = 0;
	$.each(pokedex, function(key, value) {
		if (pokemon == key) {
			number = value;
		}
	});
	return number;
}

// returns the proper sprite url path for a given Pokémon
function validateURL(name) {
	switch(name){
		case 'Basculin-red-striped':
			name = 'basculin';
			break;		
		case 'Darmanitan-standard':
			name = 'darmanitan';
			break;	
		case 'Deoxys-normal':
			name = 'deoxys';
			break;			
		case 'Giratina-altered':
			name = 'giratina';
			break;		
		case 'Gourgeist-average':
			name = 'gourgeist';
			break;					
		case 'Keldeo-ordinary':
			name = 'keldeo';
			break;										
		case 'Landorus-incarnate':
			name = 'landorus';
			break;	
		case 'Meloetta-aria':
			name = 'meloetta';
			break;
		case 'Meowstic-male':
			name = 'meowstic';
			break;	
		case 'Pumpkaboo-average':
			name = 'pumpkaboo';
			break;					
		case 'Shaymin-land':
			name = 'shaymin';
			break;				
		case 'Thundurus-incarnate':
			name = 'thundurus';
			break;		
		case 'Tornadus-incarnate':
			name = 'tornadus';
			break;	
		case 'Wormadam-plant':
			name = 'wormadam';
			break;																		
		default:
			name = name.toLowerCase();
			break;
	}
	return name;
}