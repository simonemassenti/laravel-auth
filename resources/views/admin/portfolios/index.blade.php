@extends('layouts.admin')

@section('content')
    <h1 class="text-center mt-5">My portfolios</h1>
    
    @if (session('message'))
        <div class="alert alert-warning w-50 m-auto my-3">
            {{ session('message') }}
        </div>
    @endif


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

                            <form action="{{ route('admin.portfolios.destroy', ['portfolio' => $portfolio->slug]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </td>
                </tr> 
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
