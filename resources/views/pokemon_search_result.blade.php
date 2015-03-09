<div class="row search-results">
	<div class="panel panel-default card col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
		<div class="row name {{ $pm['type_a'] }}">
			<h3 class="pokemon-name">{{ $pm['name'] }}</h3>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<img class="sprite" src="{{ $pm['sprite_url'] }}" alt="{{ $pm['name'] }}" height="200">
				<div class="national-number">{{ $national_number }}</div>
				<div class="type">{{ $pm['type_a'] }}<br>{{ $pm ['type_b'] }}</div>
			</div>

			<div class="col-lg-6">
				<div class="panel panel-default stats">
					<canvas id="{{ $pm['id'] }}" width="300" height="300"></canvas>
					<div style="display:none;">
						<div id="id">{{ $pm['id'] }}</div>
						<div id="hp">{{ $pm['hp'] }}</div>
						<div id="attack">{{ $pm['attack'] }}</div>
						<div id="defense">{{ $pm['defense'] }}</div>
						<div id="sp-atk">{{ $pm['sp_atk'] }}</div>
						<div id="sp-def">{{ $pm['sp_def'] }}</div>
						<div id="speed">{{ $pm['speed'] }}</div>
						<div id="total">{{ $total }}</div>
					</div>

					<script>
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
					</script>	

				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="type-defenses">
					<div class="Normal col-xs-2">Normal<br>{{ $type_defenses['Normal'] }}%</div>
					<div class="Fire col-xs-2">Fire<br>{{ $type_defenses['Fire'] }}%</div>
					<div class="Water col-xs-2">Water<br>{{ $type_defenses['Water'] }}%</div>
					<div class="Electric col-xs-2">Electric<br>{{ $type_defenses['Electric'] }}%</div>
					<div class="Grass col-xs-2">Grass<br>{{ $type_defenses['Grass'] }}%</div>
					<div class="Ice col-xs-2">Ice<br>{{ $type_defenses['Ice'] }}%</div>
					<div class="Fighting col-xs-2">Fighting<br>{{ $type_defenses['Fighting'] }}%</div>
					<div class="Poison col-xs-2">Poison<br>{{ $type_defenses['Poison'] }}%</div>
					<div class="Ground col-xs-2">Ground<br>{{ $type_defenses['Ground'] }}%</div>
					<div class="Flying col-xs-2">Flying<br>{{ $type_defenses['Flying'] }}%</div>
					<div class="Psychic col-xs-2">Psychic<br>{{ $type_defenses['Psychic'] }}%</div>
					<div class="Bug col-xs-2">Bug<br>{{ $type_defenses['Bug'] }}%</div>
					<div class="Rock col-xs-2">Rock<br>{{ $type_defenses['Rock'] }}%</div>
					<div class="Ghost col-xs-2">Ghost<br>{{ $type_defenses['Ghost'] }}%</div>
					<div class="Dragon col-xs-2">Dragon<br>{{ $type_defenses['Dragon'] }}%</div>
					<div class="Dark col-xs-2">Dark<br>{{ $type_defenses['Dark'] }}%</div>
					<div class="Steel col-xs-2">Steel<br>{{ $type_defenses['Steel'] }}%</div>
					<div class="Fairy col-xs-2">Fairy<br>{{ $type_defenses['Fairy'] }}%</div>
				</div>
			</div>		
		</div>

	</div>
</div>