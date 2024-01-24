@extends('layouts.admin')

@section('content')
    <h2 class="text-center mt-5">Dettagli di:</h2>
    <h4 class="text-center mt-1">{{ $portfolio->title }}</h4>

    <div class="container mt-4">
        <h6>Descrizione: </h6>
        <p>
            {{ $portfolio->description }}
        </p>

        <h6 class="mt-4">Data di creazione: </h6>
        {{ $portfolio->created_at }}

        <h6 class="mt-4">Slug: </h6>
        {{ $portfolio->slug }}
    </div>
@endsection
