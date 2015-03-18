
var pokemon = [];
var hp = [];
var attack = [];
var defense = [];
var spAtk = [];
var spDef = [];
var speed = [];

for(var i = 0; i < data.length; i++) {
	pokemon[i] = data[i]["name"];
}
for (var i = 0; i < data.length; i++) {
	hp[i] = data[i]["hp"];
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

// Calculating the average stats for a type
var hpSum = 0;
var atkSum = 0;
var defSum = 0;
var spAtkSum = 0;
var spDefSum = 0;
var spdSum = 0;

for (var i = 0; i < data.length-1; i++) {
	hpSum += Number(hp[i]);
	atkSum += Number(attack[i]);
	defSum += Number(defense[i]);
	spAtkSum += Number(spAtk[i]);	
	spDefSum += Number(spDef[i]);
	spdSum += Number(speed[i]);
}

console.log(atkSum);

var hpAvg = Math.round(hpSum / data.length)
var atkAvg = Math.round(atkSum / data.length);
var defAvg = Math.round(defSum / data.length); 
var spAtkAvg = Math.round(spAtkSum / data.length);
var spDefAvg = Math.round(spDefSum / data.length);
var spdAvg = Math.round(spdSum / data.length);

console.log(hpAvg);

// Initialize datasets

var dataset = [];

for (var i = 0; i < data.length; i++) {
	dataset.push(["HP", hp[i] ]);
	dataset.push(["Attack", attack[i] ]);
	dataset.push(["Defense", defense[i] ]);
	dataset.push(["Sp. Atk", spAtk[i] ]);
	dataset.push(["Sp. Def", spDef[i] ]);
	dataset.push(["Speed", speed[i] ]);
}

var lineData = [];

for (var i = 0; i < data.length; i++) {
	lineData[i] = [	
					{ "x": "HP", "y": hp[i] },
					{ "x": "Attack", "y": attack[i] }, 
					{ "x": "Defense", "y": defense[i] },
					{ "x": "Sp. Atk", "y": spAtk[i] }, 
					{ "x": "Sp. Def", "y": spDef[i] },
					{ "x": "Speed", "y": speed[i] },
				  ]
}

var avgDataSet = [
					["HP", hpAvg],
					["Attack", atkAvg],
					["Defense", defAvg],
					["Sp. Atk", spAtkAvg],
					["Sp. Def", spDefAvg],
					["Speed", spdAvg]
				 ]
console.log(avgDataSet);

var avgLineData = [
					{ "x": "HP", "y": hpAvg },
					{ "x": "Attack", "y": atkAvg },
					{ "x": "Defense", "y": defAvg },
					{ "x": "Sp. Atk", "y": spAtkAvg },
					{ "x": "Sp. Def", "y": spDefAvg },
					{ "x": "Speed", "y": spdAvg },
				  ]				 
	  
console.log(avgLineData); 		   
// initialize variables for svg canvas
var w = 800;
var h = 600;

var padding = 20;

// Initialize scales
var x = d3.scale.ordinal()
	.domain(["HP", "Attack", "Defense", "Sp. Atk", "Sp. Def", "Speed"])
	.rangeBands([padding, w - padding * 2 ])

var y = d3.scale.linear()
	.domain([0, 170])
	.range([h-padding, padding]);

// Initialize line
var line = d3.svg.line()
	.x(function(d) { return x(d.x); })
	.y(function(d) { return y(d.y); })
	.interpolate("monotone");

// Initialize axes
var xAxis = d3.svg.axis()
	.scale(x)
	.orient("bottom")
	.ticks(6);

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

var avgTip = d3.tip()
	.attr("class", "d3-tip")
	.html("Average");

//Create SVG element
var svg = d3.select("#data")
			.append("svg")
			.attr("width", w)
			.attr("height", h)
			.attr("fill", "");

svg.call(tip1);
svg.call(tip2);
svg.call(avgTip)

// rectangle 
svg.append("rect")
	.attr("x", padding * 2)
	.attr("y", 0)
	.attr("width", 740)
	.attr("height", h - padding * 2)
	.attr("fill", "rgba(218, 223, 225, .5)");

// circles
svg.append("g")
	.selectAll("circle")
	.data(dataset)
	.enter()
	.append("circle")
	.attr("cx", function(d) {
		return x(d[0]) + 85;
	})
	.attr("cy", function(d) {
		return y(d[1]) - 20;
	})
	.attr("r", 10)
	.attr("fill", "rgba(244, 67, 54, 1)")
	.attr("stroke", "none")
	.attr("class", "type")
	.on("mouseover", tip1.show)
	.on("mouseout", tip1.hide);

// lines
svg.append("g")
	.attr("transform", "translate(" + 85 + "," + -padding + ")")
	.selectAll("path")
	.data(lineData)
	.enter()
	.append("path")
	.attr("d", function(d) { return line(d); })	
	.attr("stroke-width", 2)
	.attr("stroke", "rgba(244, 67, 54, 1)")
	.attr("fill", "none")
	.attr("class", "type")
	.on("mouseover", tip2.show)
	.on("mouseout", tip2.hide);		

// average circles
svg.append("g")
	.selectAll("circle")
	.data(avgDataSet)
	.enter()
	.append("circle")
	.attr("cx", function(d) {
		return x(d[0]) + 85;
	})
	.attr("cy", function(d) {
		return y(d[1]) - 20;
	})
	.attr("r", 10)
	.attr("fill", "rgb(0,150,136)")
	.attr("class", "average")
	.attr("stroke", "none")
	.on("mouseover", tip1.show)
	.on("mouseout", tip1.hide);

// average lines
svg.append("g")
	.attr("transform", "translate(" + 85 + "," + -padding + ")")
	.append("path")
	.attr("d", line(avgLineData))
	.attr("class", "average")	
	.attr("stroke-width", 2)
	.attr("stroke", "rgb(0,150,136)")
	.attr("fill", "none")
	.on("mouseover", avgTip.show)
	.on("mouseout", avgTip.hide);		
	

// x axis
svg.append("g")
	.attr("class", "axis")
	.attr("transform", "translate(" + padding + ", " + (h - padding * 2) + ")")
	.call(xAxis);

// y axis
svg.append("g")
	.attr("class", "axis")
	.attr("transform", "translate(" + padding*2 + "," + -padding + ")")
	.call(yAxis);


