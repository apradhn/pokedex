<div class="row search-results">
	<div class="panel panel-default card col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
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
					<table class="table">
						<tbody>
							<tr>
								<th class="stat-class">HP</th>
								<td class="stat-value">{{ $pm['hp'] }}</td>
							</tr>
							<tr>
								<th class="stat-class">Attack</th>
								<td class="stat-value">{{ $pm['attack'] }}</td>
							</tr>
							<tr>
								<th class="stat-class">Defense</th>
								<td class="stat-value">{{ $pm['defense'] }}</td>
							</tr>
							<tr>
								<th class="stat-class">Sp. Atk</th>
								<td class="stat-value">{{ $pm['sp_atk'] }}</td>
							</tr>
							<tr>
								<th class="stat-class">Sp. Def</th>
								<td class="stat-value">{{ $pm['sp_def'] }}</td>
							</tr>
							<tr>
								<th class="stat-class">Speed</th>
								<td class="stat-value">{{ $pm['speed'] }}</td>
							</tr>	
							<tr>
								<th class="total stat-class">Total</th>
								<td class="total stat-value">{{ $total }}</td>
							</tr>						
						</tbody>		
					</table>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
					<table class="table type-defenses">
						<tbody>
							<tr>
								<th class="Normal">Normal</th>
								<td>{{ $type_defenses['Normal'] }}%</td>
							</tr>
							<tr>
								<th class="Fire">Fire</th>
								<td>{{ $type_defenses['Fire'] }}%</td>
							</tr>
							<tr>
								<th class="Water">Water</th>
								<td>{{ $type_defenses['Water'] }}%</td>
							</tr>
							<tr>
								<th class="Electric">Electric</th>
								<td>{{ $type_defenses['Electric'] }}%</td>
							</tr>
							<tr>
								<th class="Grass">Grass</th>
								<td>{{ $type_defenses['Grass'] }}%</td>
							</tr>
							<tr>
								<th class="Ice">Ice</th>
								<td>{{ $type_defenses['Ice'] }}%</td>
							</tr>
							<tr>
								<th class="Fighting">Fighting</th>
								<td>{{ $type_defenses['Fighting'] }}%</td>
							</tr>
							<tr>
								<th class="Poison">Poison</th>
								<td>{{ $type_defenses['Poison'] }}%</td>
							</tr>
							<tr>
								<th class="Ground">Ground</th>
								<td>{{ $type_defenses['Ground'] }}%</td>
							</tr>
							<tr>
								<th class="Flying">Flying</th>
								<td>{{ $type_defenses['Flying'] }}%</td>
							</tr>
							<tr>
								<th class="Psychic">Psychic</th>
								<td>{{ $type_defenses['Psychic'] }}%</td>
							</tr>
							<tr>
								<th class="Bug">Bug</th>
								<td>{{ $type_defenses['Bug'] }}%</td>
							</tr>
							<tr>
								<th class="Rock">Rock</th>
								<td>{{ $type_defenses['Rock'] }}%</td>
							</tr>
							<tr>
								<th class="Ghost">Ghost</th>
								<td>{{ $type_defenses['Ghost'] }}%</td>
							</tr>
							<tr>
								<th class="Dragon">Dragon</th>
								<td>{{ $type_defenses['Dragon'] }}%</td>
							</tr>
							<tr>
								<th class="Dark">Dark</th>
								<td>{{ $type_defenses['Dark'] }}%</td>
							</tr>
							<tr>
								<th class="Steel">Steel</th>
								<td>{{ $type_defenses['Steel'] }}%</td>
							</tr>
							<tr>
								<th class="Fairy">Fairy</th>
								<td>{{ $type_defenses['Fairy'] }}%</td>
							</tr>							
						</tbody>
					</table>			
			</div>		
		</div>

	</div>
</div>