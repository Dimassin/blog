@extends('layouts.main')

@section('title')
    posts
@endsection

@section('content')
    <h1>All posts</h1>
    @foreach($posts as $post)
        <p><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></p>
    @endforeach
@endsection
