@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-5">My portfolios</h1>

    

    <div class="container mt-3">

        <div class="text-end mb-2">
            <a class="btn btn-success" href="{{ route('admin.portfolios.create') }}">
                Crea un nuovo portfolio
            </a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Creation date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody> 
                @foreach ($portfolios as $portfolio)
                <tr>
                        <th>{{ $portfolio->title }}</th>
                        <td>{{ $portfolio->description }}</td>
                        <td>{{ $portfolio->created_at }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.portfolios.show', ['portfolio' => $portfolio->slug]) }}">
                                Dettagli
                            </a>

                            <a class="btn btn-warning" href="{{ route('admin.portfolios.edit', ['portfolio' => $portfolio->slug]) }}">
                                Modifica
                            </a>
                        </td>
                </tr> 
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
