<div class="search-results panel panel-default content col-xs-10 col-xs-offset-1 col-sm-10">

	<div class="col-sm-4">
		<div class="row name">
			<div class="col-sm-12">
				<h2 class="pokemon-name">{{ $pm['name'] }} <br><small>{{ $national_number }}</small></h2>
			</div>
		</div>		

		<div class="row">
			<div class="col-sm-12">
			<img class="sprite" src="{{ $pm['sprite_url'] }}" alt="{{ $pm['name'] }}">
			<div class="type">
				<a href="/types/{{ $pm['type_a'] }}">
					<div class="{{ $pm['type_a'] }}">
						{{ $pm['type_a'] }}
					</div>
				</a>
				<a href="/types/{{ $pm['type_b'] }}">
					<div class="{{ $pm['type_b'] }}">
						{{ $pm ['type_b'] }}
					</div>
				</a>
			</div>
			</div>
		</div>
	</div>

	<div class="col-sm-4">
		<div class="row">
			<div class="stats-heading col-sm-12">
				<h3>Base Stats</h3>
			</div>
		</div>	
		<div class="row">
			<div class="col-sm-12">
			<!--
				<div class="captions">
					<div>HP</div>
					<div>Attack</div>
					<div>Defense</div>
					<div>Sp. Atk</div>
					<div>Sp. Def</div>
					<div>Speed</div>
					<div>Total</div>
				</div>	
			
				<div class="chart {{ $pm['type_a'] }}">
					<div style="height: {{ $pm['hp'] }}px;">{{ $pm['hp'] }}</div>
					<div style="height: {{ $pm['attack'] }}px;">{{ $pm['attack'] }}</div>
					<div style="height: {{ $pm['defense'] }}px;">{{ $pm['defense'] }}</div>
					<div style="height: {{ $pm['sp_atk'] }}px;">{{ $pm['sp_atk'] }}</div>
					<div style="height: {{ $pm['sp_def'] }}px;">{{ $pm['sp_def'] }}</div>
					<div style="height: {{ $pm['speed'] }}px;">{{ $pm['speed'] }}</div>
					<div>{{ $total }}</div>
				</div>	
			-->
			<svg width="250" height="300" xmlns="http://www.w3.org/2000/svg" class="base-stats">
				<g transform="translate(25 -25)">
					<g transform="translate(100 350) rotate(180 50 50)">
						<rect x="180" y="200" width="20" height="{{ $pm['hp'] }}" fill="black" class="{{ $pm['type_a'] }}"/>
						<rect x="150" y="200" width="20" height="{{ $pm['attack'] }}" fill="black" class="{{ $pm['type_a'] }}"/>
						<rect x="120" y="200" width="20" height="{{ $pm['defense'] }}" fill="black" class="{{ $pm['type_a'] }}"/>
						<rect x="90" y="200" width="20" height="{{ $pm['sp_atk'] }}" fill="black" class="{{ $pm['type_a'] }}"/>
						<rect x="60" y="200" width="20" height="{{ $pm['sp_def'] }}" fill="black" class="{{ $pm['type_a'] }}"/>
						<rect x="30" y="200" width="20" height="{{ $pm['speed'] }}" fill="black" class="{{ $pm['type_a'] }}"/>
						<rect x="0" y="200" width="20" height="{{ $total / 4 }}" fill="black" class="{{ $pm['type_a'] }} total"/>				
					</g>
					
					<g transform="translate(-10 275) rotate(-90 25 25)">
						<text x="50" y="25">HP</text>
						<text x="35" y="55">Attack</text>
						<text x="25" y="85">Defense</text>
						<text x="30" y="115">Sp. Def</text>
						<text x="30" y="145">Sp. Atk</text>
						<text x="35" y="175">Speed</text>
						<text x="35" y="205" class="total">Total</text>
					</g>
					
					<g transform = "translate(-22)">
						<text x="25" y="{{ 245 - $pm['hp'] }}">{{ $pm['hp'] }}</text>
						<text x="55" y="{{ 245 - $pm['attack'] }}">{{ $pm['attack'] }}</text>
						<text x="85" y="{{ 245 - $pm['defense'] }}">{{ $pm['defense'] }}</text>
						<text x="115" y="{{ 245 - $pm['sp_atk'] }}">{{ $pm['sp_atk'] }}</text>
						<text x="145" y="{{ 245 - $pm['sp_def'] }}">{{ $pm['sp_def'] }}</text>
						<text x="175" y="{{ 245 - $pm['speed'] }}">{{ $pm['speed'] }}</text>
						<text x="205" y="{{ 245 - $total / 4 }}" transform="translate(-2)" class="total">{{ $total }}</text>
					</g>
				</g>
<!--
				<g>
					<line x1="1" x2="1" y1="0" y2="300" stroke="#DADFE1" />
					<line x1="25" x2="25" y1="0" y2="300" stroke="#DADFE1" />
					<line x1="50" x2="50" y1="0" y2="300" stroke="#DADFE1" />
					<line x1="75" x2="75" y1="0" y2="300" stroke="#DADFE1" />
					<line x1="100" x2="100" y1="0" y2="300" stroke="#DADFE1" />
					<line x1="125" x2="125" y1="0" y2="300" stroke="#DADFE1" />
					<line x1="150" x2="150" y1="0" y2="300" stroke="#DADFE1" />
					<line x1="175" x2="175" y1="0" y2="300" stroke="#DADFE1" />
					<line x1="200" x2="200" y1="0" y2="300" stroke="#DADFE1" />
					<line x1="225" x2="225" y1="0" y2="300" stroke="#DADFE1" />
					<line x1="250" x2="250" y1="0" y2="300" stroke="#DADFE1" />
				</g>
				<g>
					<line x1="1" x2="250" y1="1" y2="1" stroke="#DADFE1" />
					<line x1="1" x2="250" y1="25" y2="25" stroke="#DADFE1" />
					<line x1="1" x2="250" y1="50" y2="50" stroke="#DADFE1" />
					<line x1="1" x2="250" y1="75" y2="75" stroke="#DADFE1" />
					<line x1="1" x2="250" y1="100" y2="100" stroke="#DADFE1" />
					<line x1="1" x2="250" y1="125" y2="125" stroke="#DADFE1" />
					<line x1="1" x2="250" y1="150" y2="150" stroke="#DADFE1" />
					<line x1="1" x2="250" y1="175" y2="175" stroke="#DADFE1" />
					<line x1="1" x2="250" y1="200" y2="200" stroke="#DADFE1" />
					<line x1="1" x2="250" y1="225" y2="225" stroke="#DADFE1" />
					<line x1="1" x2="250" y1="250" y2="250" stroke="#DADFE1" />
					<line x1="1" x2="250" y1="275" y2="275" stroke="#DADFE1" />
					<line x1="1" x2="250" y1="299" y2="299" stroke="#DADFE1" />
				</g>
-->				
			</svg>	
			<!--
			<div class="total-bubble">
				<div class="total">{{ $total }}</div>
				<div>Total</div>
			</div>
			-->
			</div>
		</div>
	</div>

	<div class="col-sm-4">
		<div class="row">
			<div class="td-heading col-sm-12">
				<h3>Type Defenses</h3>
				<p>The effectiveness of each type on {{ $pm->name }}</p>
			</div>
		</div>

		<div class="row">
			<div class="type-defenses col-sm-12">
				<div class="col-xs-3 col-sm-3 {{ $type_defense_class[0] }}">Normal<br>{{ $type_defenses['Normal'] }}% </div>
				<div class="col-xs-3 col-sm-3 {{ $type_defense_class[1] }}">Fire<br>{{ $type_defenses['Fire'] }}%</div>
				<div class="col-xs-3 col-sm-3 {{ $type_defense_class[2] }}">Water<br>{{ $type_defenses['Water'] }}%</div>
				<div class="col-xs-3 col-sm-3 {{ $type_defense_class[3] }}">Electric<br>{{ $type_defenses['Electric'] }}%</div>
				<div class="col-xs-3 col-sm-3 {{ $type_defense_class[4] }}">Grass<br>{{ $type_defenses['Grass'] }}%</div>
				<div class="col-xs-3 col-sm-3 {{ $type_defense_class[5] }}">Ice<br>{{ $type_defenses['Ice'] }}%</div>
				<div class="col-xs-3 col-sm-3 {{ $type_defense_class[6] }}">Fighting<br>{{ $type_defenses['Fighting'] }}%</div>
				<div class="col-xs-3 col-sm-3 {{ $type_defense_class[7] }}">Poison<br>{{ $type_defenses['Poison'] }}%</div>
				<div class="col-xs-3 col-sm-3 {{ $type_defense_class[8] }}">Ground<br>{{ $type_defenses['Ground'] }}%</div>
				<div class="col-xs-3 col-sm-3 {{ $type_defense_class[9] }}">Flying<br>{{ $type_defenses['Flying'] }}%</div>
				<div class="col-xs-3 col-sm-3 {{ $type_defense_class[10] }}">Psychic<br>{{ $type_defenses['Psychic'] }}%</div>
				<div class="col-xs-3 col-sm-3 {{ $type_defense_class[11] }}">Bug<br>{{ $type_defenses['Bug'] }}%</div>
				<div class="col-xs-3 col-sm-3 {{ $type_defense_class[12] }}">Rock<br>{{ $type_defenses['Rock'] }}%</div>
				<div class="col-xs-3 col-sm-3 {{ $type_defense_class[13] }}">Ghost<br>{{ $type_defenses['Ghost'] }}%</div>
				<div class="col-xs-3 col-sm-3 {{ $type_defense_class[14] }}">Dragon<br>{{ $type_defenses['Dragon'] }}%</div>
				<div class="col-xs-3 col-sm-3 {{ $type_defense_class[15] }}">Dark<br>{{ $type_defenses['Dark'] }}%</div>
				<div class="col-xs-3 col-sm-3 {{ $type_defense_class[16] }}">Steel<br>{{ $type_defenses['Steel'] }}%</div>
				<div class="col-xs-3 col-sm-3 {{ $type_defense_class[17] }}">Fairy<br>{{ $type_defenses['Fairy'] }}%</div>
			</div>
		</div>
	</div>

</div>

