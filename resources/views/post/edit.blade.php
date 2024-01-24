@extends('layouts.main')

@section('title')
    post update
@endsection

@section('content')
    <a href="{{ route('post.show', $post->id) }}">back</a>
    <form method="post" action="{{ route('post.update', $post->id) }}">
        @csrf
        @method('patch')
        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input class="form-control" id="title" placeholder="Title" value="{{ $post->title }}" name="title">
        </div>
        <div class="form-group mb-3">
            <label for="content">Content</label>
            <input class="form-control" id="content" placeholder="Content" value="{{ $post->content }}" name="content">
        </div>
        <div class="form-group mb-3">
            <label for="category_id">Category</label>
            <select class="form-select" id="category_id" name="category_id">
                @foreach($categories as $category)
                    <option
                        {{ $category->id === $post->category_id ? ' selected' : '' }}
                        value="{{ $category->id }}">{{ $category->title }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
