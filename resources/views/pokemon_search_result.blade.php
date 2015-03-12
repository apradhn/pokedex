<div class="row search-results">

	<div class="panel panel-default col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-3">
		<div class="row name {{ $pm['type_a'] }}">
			<h3 class="pokemon-name">{{ $pm['name'] }}</h3>
		</div>
		<div class="row section {{ $pm['type_a'] }}">
			<div class="col-xs-6 col-sm-6">
				<img class="sprite" src="{{ $pm['sprite_url'] }}" alt="{{ $pm['name'] }}">
				<div class="national-number">{{ $national_number }}</div>
				<div class="type"><span class="{{ $pm['type_a'] }}">{{ $pm['type_a'] }}</span><br><span class="{{ $pm['type_b'] }}">{{ $pm ['type_b'] }}</span></div>
			</div>

			<div class="col-xs-6">
				<div class="panel panel-default stats">
					<table class="table {{ $pm['type_a'] }}">
						<tbody>
							<tr class="{{ $pm['type_a'] }}">
								<th>HP</th>
								<td>{{ $pm['hp'] }}</td>
							</tr>
							<tr class="{{ $pm['type_a'] }}">
								<th>Attack</th>
								<td>{{ $pm['attack'] }}</td>
							</tr>
							<tr class="{{ $pm['type_a'] }}">
								<th>Defense</th>
								<td>{{ $pm['defense'] }}</td>
							</tr>
								<tr class="{{ $pm['type_a'] }}">
								<th>Sp. Atk</th>
								<td>{{ $pm['sp_atk'] }}</td>
							</tr>
							<tr class="{{ $pm['type_a'] }}">
								<th>Sp. Def</th>
								<td>{{ $pm['sp_def'] }}</td>
							</tr>
							<tr class="{{ $pm['type_a'] }}">
								<th>Speed</th>
								<td>{{ $pm['speed'] }}</td>
							</tr>
							<tr class="{{ $pm['type_a'] }} total">
								<th>Total</th>
								<td>{{ $total }}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row section {{ $pm['type_a'] }} td-heading">
			<div class="col-xs-offset-2 col-sm-4 col-sm-offset-2">Type Defenses</div>
		</div>

		<div class="row section {{ $pm['type_a'] }}">
			<div class="type-defenses col-xs-offset-2 col-sm-offset-2">
				<div class="Normal col-xs-3 col-sm-3">Normal<br>{{ $type_defenses['Normal'] }}%</div>
				<div class="Fire col-xs-3 col-sm-3">Fire<br>{{ $type_defenses['Fire'] }}%</div>
				<div class="Water col-xs-3 col-sm-3">Water<br>{{ $type_defenses['Water'] }}%</div>
				<div class="Electric col-xs-3 col-sm-3">Electric<br>{{ $type_defenses['Electric'] }}%</div>
				<div class="Grass col-xs-3 col-sm-3 ">Grass<br>{{ $type_defenses['Grass'] }}%</div>
				<div class="Ice col-xs-3 col-sm-3">Ice<br>{{ $type_defenses['Ice'] }}%</div>
				<div class="Fighting col-xs-3 col-sm-3">Fighting<br>{{ $type_defenses['Fighting'] }}%</div>
				<div class="Poison col-xs-3 col-sm-3">Poison<br>{{ $type_defenses['Poison'] }}%</div>
				<div class="Ground col-xs-3 col-sm-3">Ground<br>{{ $type_defenses['Ground'] }}%</div>
				<div class="Flying col-xs-3 col-sm-3">Flying<br>{{ $type_defenses['Flying'] }}%</div>
				<div class="Psychic col-xs-3 col-sm-3">Psychic<br>{{ $type_defenses['Psychic'] }}%</div>
				<div class="Bug col-xs-3 col-sm-3">Bug<br>{{ $type_defenses['Bug'] }}%</div>
				<div class="Rock col-xs-3 col-sm-3">Rock<br>{{ $type_defenses['Rock'] }}%</div>
				<div class="Ghost col-xs-3 col-sm-3">Ghost<br>{{ $type_defenses['Ghost'] }}%</div>
				<div class="Dragon col-xs-3 col-sm-3">Dragon<br>{{ $type_defenses['Dragon'] }}%</div>
				<div class="Dark col-xs-3 col-sm-3">Dark<br>{{ $type_defenses['Dark'] }}%</div>
				<div class="Steel col-xs-3 col-sm-3">Steel<br>{{ $type_defenses['Steel'] }}%</div>
				<div class="Fairy col-xs-3 col-sm-3">Fairy<br>{{ $type_defenses['Fairy'] }}%</div>
			</div>
		</div>
	</div>
</div>