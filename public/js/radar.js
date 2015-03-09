var id = String(document.getElementById('id').textContent);
console.log(id);
var hp = document.getElementById('hp').textContent;
var attack = document.getElementById('attack').textContent;
var defense = document.getElementById('defense').textContent;
var spAtk = document.getElementById('sp-atk').textContent;
var spDef = document.getElementById('sp-def').textContent;
var speed = document.getElementById('speed').textContent;
var total = document.getElementById('total').textContent;

// Get the context of the canvas element we want to select
var ctx = document.getElementById(id).getContext("2d");

var data = {
    labels: ["HP", "Attack", "Defense", "Sp. Atk", "Sp. Def", "Speed"],
    datasets: [
        {
	        label: "My First dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            data: [hp, attack, defense, spAtk, spDef, speed]
        },			        
    ]
};

var myRadarChart = new Chart(ctx).Radar(data);
