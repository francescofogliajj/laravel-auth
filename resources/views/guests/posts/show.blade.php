@extends('layouts.app')

@section('content')
    <div class="container">
        @if (!empty($post->img_path))
            <img class="img-fluid" src="{{ asset('storage/' . $post->img_path) }}" alt="{{ $post->title }}">
        @else
            <img class="img-fluid" src="{{ asset('images/placeholder.png') }}" alt="{{ $post->title }}">
        @endif
        <h1>{{ $post->title }}</h1>
        <small>{{ $post->user->name }} - {{ $post->created_at->format('d-m-Y') }}</small>
        <p>{{ $post->text }}</p>
    </div>
@endsection