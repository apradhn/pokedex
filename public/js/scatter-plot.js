
var pokemon = [];
var attack = [];
var defense = [];
var spAtk = [];
var spDef = [];
var speed = [];

for(var i = 0; i < data.length; i++) {
	pokemon[i] = data[i]["name"];
}
for (var i = 0; i < data.length; i++) {
	attack[i] = data[i]["attack"];
}
for (var i = 0; i < data.length; i++) {
	defense[i] = data[i]["defense"];
}
for (var i = 0; i < data.length; i++) {
	spAtk[i] = data[i]["sp_atk"];
}
for (var i = 0; i < data.length; i++) {
	spDef[i] = data[i]["sp_def"];
}

for (var i = 0; i < data.length; i++) {
	speed[i] = data[i]["speed"];
}

var dataset = [];

for (var i = 0; i < data.length; i++) {
	dataset.push(["Attack", attack[i] ]);
	dataset.push(["Defense", defense[i] ]);
	dataset.push(["Sp. Atk", spAtk[i] ]);
	dataset.push(["Sp. Def", spDef[i] ]);
	dataset.push(["Speed", speed[i] ]);
}


/*
var dataset = [ 
				["Attack", 64], ["Defense", 45], ["Sp. Atk", 50], ["Sp. Def", 50], ["Speed", 50],
				["Attack", 	84], ["Defense", 65], ["Sp. Atk", 70], ["Sp. Def", 70], ["Speed", 70]		
			];
*/
var lineData = [];

for (var i = 0; i < data.length; i++) {
	lineData[i] = [	
					{ "x": "Attack", "y": attack[i] }, { "x": "Defense", "y": defense[i] },
					{ "x": "Sp. Atk", "y": spAtk[i] }, { "x": "Sp. Def", "y": spDef[i] },
					{ "x": "Speed", "y": speed[i] },
				  ]
}

;

/*
var lineData = [ 
				[
					 { "x": "Attack", "y": 64 }, { "x": "Defense", "y": 45 }, { "x": "Sp. Atk", "y": 50 },
					 { "x": "Sp. Def", "y": 50 }, { "x": "Speed", "y": 50 } 
				],
				[
					 { "x": "Attack", "y": 84 }, { "x": "Defense", "y": 65 }, { "x": "Sp. Atk", "y": 70 },
					 { "x": "Sp. Def", "y": 70 }, { "x": "Speed", "y": 70 } 
				]
			   ];	
*/

var names = [
			 "Dratini",
			 "Dragonair"
			];			   		   
// initialize variables for svg canvas
var w = 800;
var h = 600;

var padding = 20;

// Initialize scales
var x = d3.scale.ordinal()
	.domain(["Attack", "Defense", "Sp. Atk", "Sp. Def", "Speed"])
	.rangeBands([1, w - padding ])

var y = d3.scale.linear()
	.domain([0, 170])
	.range([h, 0]);

// Initialize line
var line = d3.svg.line()
	.x(function(d) { return x(d.x); })
	.y(function(d) { return y(d.y); })
	.interpolate("monotone");

// Initialize axes
var xAxis = d3.svg.axis()
	.scale(x)
	.orient("bottom")
	.ticks(5);

var yAxis = d3.svg.axis()
	.scale(y)
	.orient("left")
	.ticks(5);

// initialize margins
var margin = {top: 5, right: 0, bottom: 5, left: 20 },
	width = w - margin.left - margin.right,
	height = h - margin.top - margin.bottom;

// initialize tooltips
var tip1 = d3.tip()
	.attr("class", "d3-tip")
	.html(function(d) { return d[1]; });

var tip2 = d3.tip()
	.attr("class", "d3-tip")
	.html(function(d, i) { return pokemon[i]; });

//Create SVG element
var svg = d3.select("#data")
			.append("svg")
			.attr("width", w)
			.attr("height", h)
			.append("g")
			.attr("transform", "translate(" + margin.left + ", 0)")
			.attr("fill", "");

svg.call(tip1);
svg.call(tip2);

svg.append("rect")
	.attr("x", 0 + padding)
	.attr("y", 0)
	.attr("width", w-padding)
	.attr("height", h-padding)
	.attr("fill", "rgba(218, 223, 225, .5)");

// circles
svg.append("g")
	.attr("transform", "translate(" + padding * 5 + "," + -padding + ")")
	.selectAll("circle")
	.data(dataset)
	.enter()
	.append("circle")
	.attr("cx", function(d) {
		return x(d[0]);
	})
	.attr("cy", function(d) {
		return y(d[1]);
	})
	.attr("r", 10)
	.attr("fill", "rgba(244, 67, 54, .2)")
	.attr("stroke", "none")
	.on("mouseover", tip1.show)
	.on("mouseout", tip1.hide);

// line

svg.append("g")
	.attr("transform", "translate(" + padding * 5 + "," + -padding + ")")
	.selectAll("path")
	.data(lineData)
	.enter()
	.append("path")
	.attr("d", function(d) { return line(d); })	
	.attr("stroke-width", 2)
	.attr("stroke", "rgba(0, 0, 0, .2)")
	.attr("fill", "none")
	.on("mouseover", tip2.show)
	.on("mouseout", tip2.hide);		


// x axis
svg.append("g")
	.attr("class", "axis")
	.attr("transform", "translate(" + padding + ", " + (h - padding) + ")")
	.call(xAxis);

// y axis
svg.append("g")
	.attr("class", "axis")
	.attr("transform", "translate(" + 21 + "," + -padding + ")")
	.call(yAxis);

