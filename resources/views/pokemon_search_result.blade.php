<div class="row search-results">
	<div class="panel panel-default col-sm-8 col-sm-offset-2">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="col-sm-12 col-lg-6">
					<h3 class="pokemon-name">{{ $pm['name'] }}</h3>
					<img class="sprite" src="{{ $pm['sprite_url'] }}" alt="{{ $pm['name'] }}">
					<div class="type">{{ $pm['type_a'] }}<br>{{ $pm ['type_b'] }}</div>
				</div>

				<div class="col-lg-6">
					<table class="table table-condensed base-stats col-sm-10">
						<thead class="">
							<tr>
								<th>Base Stats</th>
								<th></th>
							</tr>
						</thead>
						<tbody class="">
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
			<div class="col-lg-10 col-lg-offset-1">
				<table class="table table-condensed type-defenses col-sm-6 col-xs-6">
					<tbody>
						<tr>
							<th class="normal">Normal</th>
							<td>100%</td>
						</tr>
						<tr>
							<th class="fire">Fire</th>
							<td>100%</td>
						</tr>
						<tr>
							<th class="water">Water</th>
							<td>100%</td>
						</tr>
						<tr>
							<th class="electric">Electric</th>
							<td>100%</td>
						</tr>
						<tr>
							<th class="grass">Grass</th>
							<td>100%</td>
						</tr>
						<tr>
							<th class="ice">Ice</th>
							<td>100%</td>
						</tr>
						<tr>
							<th class="fighting">Fighting</th>
							<td>100%</td>
						</tr>
						<tr>
							<th class="poison">Poison</th>
							<td>100%</td>
						</tr>
						<tr>
							<th class="ground">Ground</th>
							<td>100%</td>
						</tr>
					</tbody>
				</table>			

				<table class="table table-condensed type-defenses col-sm-6 col-xs-6">
					<tbody>
						<tr>
							<th class="flying">Flying</th>
							<td>100%</td>
						</tr>
						<tr>
							<th class="psychic">Psychic</th>
							<td>100%</td>
						</tr>
						<tr>
							<th class="bug">Bug</th>
							<td>100%</td>
						</tr>
						<tr>
							<th class="rock">Rock</th>
							<td>100%</td>
						</tr>
						<tr>
							<th class="ghost">Ghost</th>
							<td>100%</td>
						</tr>
						<tr>
							<th class="dragon">Dragon</th>
							<td>100%</td>
						</tr>
						<tr>
							<th class="dark">Dark</th>
							<td>100%</td>
						</tr>
						<tr>
							<th class="steel">Steel</th>
							<td>100%</td>
						</tr>
						<tr>
							<th class="fairy">Fairy</th>
							<td>100%</td>
						</tr>
					</tbody>
				</table>	
			</div>		
		</div>

	</div>
</div>