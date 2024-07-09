@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Sfoglia il Catalogo</h1>

            </div>
        </div>

        <div class="row">
            @foreach ($catalog as $comic)
                <div class="col-3 py-3">
                    <div class="card h-100">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}, {{ $comic->sale_date }}</h5>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Vai ai dettagli</a>
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Modifica</a>
                        </div>
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</a>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
