@extends('layouts.main')

@section('title')
    post
@endsection

@section('content')
    <p>{{ $post->title }}</p>
    <p>{{ $post->content }}</p>
    <a href="{{ route('post.edit', $post->id) }}">update</a>
    <form method="post" action="{{ route('post.delete', $post->id) }}">
        @csrf
        @method('delete')
        <input type="submit" value="delete" class="btn btn-danger">
    </form>
@endsection
