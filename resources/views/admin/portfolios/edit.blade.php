@extends('layouts.app')

@section('content')

    <h2 class="text-center mt-5">Modifica il Portfolio</h2>

    <div class="container w-50">
        <form action="{{ route('admin.portfolios.update', ['portfolio' => $portfolio->slug]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $portfolio->title }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{ $portfolio->description }}</textarea>
            </div>

            <button class="btn btn-warning" type="submit">Modifica</button>
        </form>
    </div>

@endsection