@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <img src="{{ $comic->thumb }}" class="w-30" style="aspect-ratio: 16/9;" />
            </div>
            <div class="col-12 p-4">
                <h2>{{ $comic->title }}</h2>
                <p>Anno {{ $comic->sale_date }}</p>
                <p>{{ $comic->description }}</p>
                <a href="https://store.steampowered.com/?l=italian" class="btn btn-primary">Compralo per
                    {{ $comic->price }}€</a>
            </div>
        </div>
    </div>
@endsection
