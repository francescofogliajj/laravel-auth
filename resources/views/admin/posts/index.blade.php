@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tutti i post</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Autore</th>
                    <th>Titolo</th>
                    <th>Data creazione</th>
                    <th style="width: 150px">Immagine</th>
                    {{-- <th colspan="3"></th> --}}
                </tr>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->created_at->format('d-m-Y') }}</td>
                        <td>
                            @if (!empty($post->img_path))
                                <img class="img-fluid" src="{{ asset('storage/' . $post->img_path) }}" alt="{{ $post->title }}">
                            @else
                                <img class="img-fluid" src="{{ asset('images/placeholder.png') }}" alt="{{ $post->title }}">
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection