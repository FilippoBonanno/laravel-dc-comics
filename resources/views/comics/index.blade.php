@extends('layouts.app')

@section('content')
    <h1>Lista Title: </h1>
    @foreach ($catalog as $comic)
        <p><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></p>
    @endforeach
@endsection
