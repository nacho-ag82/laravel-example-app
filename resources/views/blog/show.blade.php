@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <p><small>Published on {{ $post->created_at->format('M d, Y') }}</small></p>
    </div>
@endsection