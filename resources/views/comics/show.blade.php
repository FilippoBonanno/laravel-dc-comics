@extends('layouts.app')

@section('content')
    <h1>Detail Comic: </h1>
    <p>Prezzo: {{ $comic->price }}</p>
    <p>Anno di Uscita: {{ $comic->sale_date }}</p>
    <p>Descrizione:
        {{ $comic->description }}</p>
    <p>Type: {{ $comic->type }}</p>
@endsection
