<div class="container-fluid">
	<div class="panel panel-default content col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-3">

		<div class="row name {{ $pm['type_a'] }}">
			<h2 class="pokemon-name">{{ $pm['name'] }}</h2>
			<h3 class="national-number">{{ $national_number }}</h3>
		</div>

		<div class="row">

			<div class="col-sm-6">
				<img class="sprite" src="{{ $pm['sprite_url'] }}" alt="{{ $pm['name'] }}">
				<div class="type"><div class="{{ $pm['type_a'] }}">{{ $pm['type_a'] }}</div><div class="{{ $pm['type_b'] }}">{{ $pm ['type_b'] }}</div></div>
			</div>

			<div class="col-sm-6">

				<div class="captions">
					<div>HP</div>
					<div>Attack</div>
					<div>Defense</div>
					<div>Sp. Atk</div>
					<div>Sp. Def</div>
					<div>Speed</div>
					<div>Total: {{ $total }}</div>
				</div>	

				<div class="chart {{ $pm['type_a'] }}">
					<div style="width: {{ $pm['hp'] }}px;">{{ $pm['hp'] }}</div>
					<div style="width: {{ $pm['attack'] }}px;">{{ $pm['attack'] }}</div>
					<div style="width: {{ $pm['defense'] }}px;">{{ $pm['defense'] }}</div>
					<div style="width: {{ $pm['sp_atk'] }}px;">{{ $pm['sp_atk'] }}</div>
					<div style="width: {{ $pm['sp_def'] }}px;">{{ $pm['sp_def'] }}</div>
					<div style="width: {{ $pm['speed'] }}px;">{{ $pm['speed'] }}</div>
				</div>	

			</div>

		</div>

		<div class="row">
			<div class="col-sm-6 td-heading"><h3>Type Defenses</h3></div>
		</div>

		<div class="row">
			<div class="type-defenses col-sm-10 col-sm-offset-1">
				<div class="col-xs-3 col-sm-4 {{ $type_defense_class[0] }}">Normal<br>{{ $type_defenses['Normal'] }}% </div>
				<div class="col-xs-3 col-sm-4 {{ $type_defense_class[1] }}">Fire<br>{{ $type_defenses['Fire'] }}%</div>
				<div class="col-xs-3 col-sm-4 {{ $type_defense_class[2] }}">Water<br>{{ $type_defenses['Water'] }}%</div>
				<div class="col-xs-3 col-sm-4 {{ $type_defense_class[3] }}">Electric<br>{{ $type_defenses['Electric'] }}%</div>
				<div class="col-xs-3 col-sm-4 {{ $type_defense_class[4] }}">Grass<br>{{ $type_defenses['Grass'] }}%</div>
				<div class="col-xs-3 col-sm-4 {{ $type_defense_class[5] }}">Ice<br>{{ $type_defenses['Ice'] }}%</div>
				<div class="col-xs-3 col-sm-4 {{ $type_defense_class[6] }}">Fighting<br>{{ $type_defenses['Fighting'] }}%</div>
				<div class="col-xs-3 col-sm-4 {{ $type_defense_class[7] }}">Poison<br>{{ $type_defenses['Poison'] }}%</div>
				<div class="col-xs-3 col-sm-4 {{ $type_defense_class[8] }}">Ground<br>{{ $type_defenses['Ground'] }}%</div>
				<div class="col-xs-3 col-sm-4 {{ $type_defense_class[9] }}">Flying<br>{{ $type_defenses['Flying'] }}%</div>
				<div class="col-xs-3 col-sm-4 {{ $type_defense_class[10] }}">Psychic<br>{{ $type_defenses['Psychic'] }}%</div>
				<div class="col-xs-3 col-sm-4 {{ $type_defense_class[11] }}">Bug<br>{{ $type_defenses['Bug'] }}%</div>
				<div class="col-xs-3 col-sm-4 {{ $type_defense_class[12] }}">Rock<br>{{ $type_defenses['Rock'] }}%</div>
				<div class="col-xs-3 col-sm-4 {{ $type_defense_class[13] }}">Ghost<br>{{ $type_defenses['Ghost'] }}%</div>
				<div class="col-xs-3 col-sm-4 {{ $type_defense_class[14] }}">Dragon<br>{{ $type_defenses['Dragon'] }}%</div>
				<div class="col-xs-3 col-sm-4 {{ $type_defense_class[15] }}">Dark<br>{{ $type_defenses['Dark'] }}%</div>
				<div class="col-xs-3 col-sm-4 {{ $type_defense_class[16] }}">Steel<br>{{ $type_defenses['Steel'] }}%</div>
				<div class="col-xs-3 col-sm-4 {{ $type_defense_class[17] }}">Fairy<br>{{ $type_defenses['Fairy'] }}%</div>
			</div>
		</div>

	</div>

</div>
