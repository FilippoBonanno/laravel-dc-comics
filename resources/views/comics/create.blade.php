@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Aggiungi un fumetto al catalogo</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <form method="POST" action="{{ route('comics.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="tit" class="form-label">title</label>
                        <input type="text" class="form-control" name="title" id="tit" required>
                    </div>
                    <div class="mb-3">
                        <label for="descr" class="form-label">description</label>
                        <textarea type="text" class="form-control" name="description" id="descr" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="pri" class="form-label">price</label>
                        <input type="number" min="0.99" max="999.99" class="form-control" name="price"
                            id="pri" required>
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">sale_date</label>
                        <input type="number" min="1980" max="2024" class="form-control" name="sale_date"
                            id="year" required>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">thumb</label>
                        <input type="text" class="form-control" name="thumb" id="img" required>
                    </div>
                    <div class="mb-3">
                        <label for="seri" class="form-label">series</label>
                        <input type="text" class="form-control" name="series" id="seri" required>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">type</label>
                        <input type="text" class="form-control" name="type" id="type" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
