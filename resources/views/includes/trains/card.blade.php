<div class="card mb-4">
    <div class="card-body">
        <h3>Name: {{ $train->agency }}</h3>
        <h3>Partenza: {{ $train->departure_station }} ore: {{ $train->departure_time }}</h3>
        <h3>Arrivo: {{ $train->arrival_station }} ore: {{ $train->arrival_time }}</h3>
        <h3>Codice: {{ $train->train_code }}</h3>
        <h3>Carrozze: {{ $train->number_coaches }}</h3>
    </div>
</div>
