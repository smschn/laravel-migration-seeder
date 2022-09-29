@extends('basic_layout.app')

@section('page_title', 'Lista dei treni')

@section('content')
<h1>Benvenuto nella lista dei treni</h1>
    @foreach($trains as $train)
        <p>{{$train->company}}</p>
        <p>{{$train->id}}</p>
    @endforeach
@endsection