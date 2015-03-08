<div class="row search-results">
	<div class="panel panel-default card col-sm-6 col-sm-offset-3">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="pokemon-name">{{ $pm['name'] }}</h3>
				<img class="sprite" src="{{ $pm['sprite_url'] }}" alt="{{ $pm['name'] }}">
				<div class="type">{{ $pm['type_a'] }}<br>{{ $pm ['type_b'] }}</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div class="panel panel-primary stats">
					<div class="panel-heading">Base Stats</div>
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
								<th class="total">Total</th>
								<td class="total">{{ $total }}</td>
							</tr>						
						</tbody>		
					</table>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
					<table class="table type-defenses col-sm-6 col-xs-6">
						<tbody>
							<tr>
								<th class="normal">Normal</th>
								<td>{{ $type_defenses['Normal'] }}%</td>
							</tr>
							<tr>
								<th class="fire">Fire</th>
								<td>{{ $type_defenses['Fire'] }}%</td>
							</tr>
							<tr>
								<th class="water">Water</th>
								<td>{{ $type_defenses['Water'] }}%</td>
							</tr>
							<tr>
								<th class="electric">Electric</th>
								<td>{{ $type_defenses['Electric'] }}%</td>
							</tr>
							<tr>
								<th class="grass">Grass</th>
								<td>{{ $type_defenses['Grass'] }}%</td>
							</tr>
							<tr>
								<th class="ice">Ice</th>
								<td>{{ $type_defenses['Ice'] }}%</td>
							</tr>
							<tr>
								<th class="fighting">Fighting</th>
								<td>{{ $type_defenses['Fighting'] }}%</td>
							</tr>
							<tr>
								<th class="poison">Poison</th>
								<td>{{ $type_defenses['Poison'] }}%</td>
							</tr>
							<tr>
								<th class="ground">Ground</th>
								<td>{{ $type_defenses['Ground'] }}%</td>
							</tr>
						</tbody>
					</table>			
					<table class="table type-defenses col-sm-6 col-xs-6">
						<tbody>
							<tr>
								<th class="flying">Flying</th>
								<td>{{ $type_defenses['Flying'] }}%</td>
							</tr>
							<tr>
								<th class="psychic">Psychic</th>
								<td>{{ $type_defenses['Psychic'] }}%</td>
							</tr>
							<tr>
								<th class="bug">Bug</th>
								<td>{{ $type_defenses['Bug'] }}%</td>
							</tr>
							<tr>
								<th class="rock">Rock</th>
								<td>{{ $type_defenses['Rock'] }}%</td>
							</tr>
							<tr>
								<th class="ghost">Ghost</th>
								<td>{{ $type_defenses['Ghost'] }}%</td>
							</tr>
							<tr>
								<th class="dragon">Dragon</th>
								<td>{{ $type_defenses['Dragon'] }}%</td>
							</tr>
							<tr>
								<th class="dark">Dark</th>
								<td>{{ $type_defenses['Dark'] }}%</td>
							</tr>
							<tr>
								<th class="steel">Steel</th>
								<td>{{ $type_defenses['Steel'] }}%</td>
							</tr>
							<tr>
								<th class="fairy">Fairy</th>
								<td>{{ $type_defenses['Fairy'] }}%</td>
							</tr>
						</tbody>
					</table>	
			</div>		
		</div>

	</div>
</div>