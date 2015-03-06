<div class="row">
	<div class="panel panel-default col-sm-8 col-sm-offset-2">
		<div class="col-sm-2">
			<h3>{{ $pm['name'] }}</h3>
			<img src="{{ $pm['sprite_url'] }}" alt="{{ $pm['name'] }}">
			<div class="type">{{ $pm['type_a'] }}<br>{{ $pm ['type_b'] }}</div>
		</div>
		<div class="col-sm-4 col-sm-offset-1">
			<table class="table table-condensed base-stats">
				<thead>
					<tr>
						<th>Base Stats</th>
						<th></th>
					</tr>
				</thead>
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
		<div class="col-sm-2">
			<table class="table table-condensed type-defenses">
				<tr>
					<th class="normal">Normal</th>
					<td></td>
				</tr>
				<tr>
					<th class="fire">Fire</th>
					<td></td>
				</tr>
				<tr>
					<th class="water">Water</th>
					<td></td>
				</tr>
				<tr>
					<th class="electric">Electric</th>
					<td></td>
				</tr>
				<tr>
					<th class="grass">Grass</th>
					<td></td>
				</tr>
				<tr>
					<th class="ice">Ice</th>
					<td></td>
				</tr>
				<tr>
					<th class="fighting">Fighting</th>
					<td></td>
				</tr>
				<tr>
					<th class="poison">Poison</th>
					<td></td>
				</tr>
				<tr>
					<th class="ground">Ground</th>
					<td></td>
				</tr>
			</table>			
		</div>
		<div class="col-sm-2">
			<table class="table table-condensed type-defenses">
				<tr>
					<th class="flying">Flying</th>
					<td></td>
				</tr>
				<tr>
					<th class="psychic">Psychic</th>
					<td></td>
				</tr>
				<tr>
					<th class="bug">Bug</th>
					<td></td>
				</tr>
				<tr>
					<th class="rock">Rock</th>
					<td></td>
				</tr>
				<tr>
					<th class="ghost">Ghost</th>
					<td></td>
				</tr>
				<tr>
					<th class="dragon">Dragon</th>
					<td></td>
				</tr>
				<tr>
					<th class="dark">Dark</th>
					<td></td>
				</tr>
				<tr>
					<th class="steel">Steel</th>
					<td></td>
				</tr>
				<tr>
					<th class="fairy">Fairy</th>
					<td></td>
				</tr>
			</table>			
		</div>
	</div>
</div>