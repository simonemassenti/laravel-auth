@extends('layouts.app')

@section('content')
    <h2 class="text-center mt-5">Crea un nuovo portfolio</h2>

    <div class="container w-50">
        <form action="{{ route('admin.portfolios.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
            </div>

            <button class="btn btn-success" type="submit">Crea</button>
        </form>
    </div>
@endsection
