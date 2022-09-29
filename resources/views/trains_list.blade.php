@extends('basic_layout.app')

@section('page_title', 'Lista dei treni')

@section('content')
<h1>Benvenuto nella lista dei treni</h1>
    @foreach($trains as $train)
        <ul>
            <li>Azienda: {{$train->company}}</li>
            <li>Stazione di partenza: {{$train->departure_station}}</li>
            <li>Orario partenza: {{$train->departure_time}}</li>
            <li>Stazione di arrivo: {{$train->arrival_station}}</li>
            <li>Orario di arrivo: {{$train->departure_time}}</li>
            <li>Codice treno: {{$train->train_code}}</li>
        </ul>
    @endforeach
@endsection