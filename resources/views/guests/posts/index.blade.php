@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Il mio Blog</h1>

        <div class="row">
            @foreach ($posts as $post)
                <div class="col-4 my-4 d-flex align-content-stretch">
                    <div class="card">
                        {{-- <div class="card-header">
                            <h2>{{ $post->title }}</h2>
                            <small>{{ $post->user->name }}</small>
                        </div> --}}

                        <img class="card-img-top" src="{{ !empty($post->img_path) ? asset('storage/' . $post->img_path) : asset('images/placeholder.png') }}" alt="{{ $post->title }}">

                        <div class="card-body">
                            <h2>{{ $post->title }}</h2>
                            <small class="d-block">{{ $post->user->name }}</small>
                            <a href="{{ route('posts.show', $post->slug) }}">Leggi</a>
                            {{-- <p>{{ $post->text }}</p> --}}
                        </div> 
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection