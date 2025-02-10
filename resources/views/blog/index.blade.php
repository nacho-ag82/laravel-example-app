<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Blog</h1>
        @if($posts->count())
            <ul>
                @foreach($posts as $post)
                    <li>
                        <a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a>
                        <p>{{ $post->excerpt }}</p>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No posts available.</p>
        @endif
    </div>
</body>
</html>