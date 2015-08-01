<div>
	<img src="{{ $pokemon['sprite_url'] }}" alt="{{ $pokemon['name'] }}">
	<div class="name">{{ $pokemon['name'] }}</div>
	<div class="type {{ $pokemon['type_a'] }}">{{ $pokemon['type_a'] }}</div>
	<div class="type {{ $pokemon['type_b'] }}">{{ $pokemon['type_b'] }}</div>
</div>