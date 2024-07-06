@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Aggiungi un gioco al catalogo</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <form method="POST" action="{{ route('comics.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">title</label>
                        <input type="text" class="form-control" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">description</label>
                        <textarea type="text" class="form-control" name="description" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">price</label>
                        <input type="number" min="0.99" max="999.99" class="form-control" name="price" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">sale_date</label>
                        <input type="number" min="1980" max="2024" class="form-control" name="sale_date" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">thumb</label>
                        <input type="text" class="form-control" name="thumb" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">series</label>
                        <input type="text" class="form-control" name="series" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
