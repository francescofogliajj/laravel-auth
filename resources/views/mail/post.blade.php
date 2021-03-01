<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Post</title>
    </head>
    <body>
        <h1>{{ $post->title }}</h1>

        @if (!empty($post->img_path))
            <img src="{{ asset('storage/' . $post->img_path) }}" alt="{{ $post->title }}" style="width: 100%">
        @else
            <img src="{{ asset('images/placeholder.png') }}" alt="{{ $post->title }}" style="width: 100%">
        @endif

        <p>{{ $post->text }}</p>
    </body>
</html>