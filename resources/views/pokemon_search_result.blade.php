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
					<div style="display:none;">
						<div id="hp">HP: {{ $pm['hp'] }}</div>
						<div id="attack">Attack: {{ $pm['attack'] }}</div>
						<div id="defense">Defense: {{ $pm['defense'] }}</div>
						<div id="sp-atk">Sp. Atk: {{ $pm['sp_atk'] }}</div>
						<div id="sp-def">Sp. Def: {{ $pm['sp_def'] }}</div>
						<div id="speed">Speed: {{ $pm['speed'] }}</div>
						<div id="total">Total: {{ $total }}</div>
					</div>
					<table class="table">
						<tbody>
							<tr>
								<th>HP</th>
								<td>{{ $pm['hp'] }}</td>
							</tr>
							<tr>
								<th>Attack</th>
								<td>{{ $pm['attack'] }}</td>
							</tr>
							<tr>
								<th>Defense</th>
								<td>{{ $pm['defense'] }}</td>
							</tr>
							<tr>
								<th>Sp. Atk</th>
								<td>{{ $pm['sp_atk'] }}</td>
							</tr>
							<tr>
								<th>Sp. Def</th>
								<td>{{ $pm['sp_def'] }}</td>
							</tr>
							<tr>
								<th>Speed</th>
								<td>{{ $pm['speed'] }}</td>
							</tr>
							<tr>
								<th>Total</th>
								<td>{{ $total }}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 type-defenses-table">
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