@extends('layouts.main')

@section('title')
    creating post
@endsection

@section('content')
    <form method="post" action="{{ route('post.store') }}">
        @csrf
        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input class="form-control" id="title" placeholder="Title" name="title">
        </div>
        <div class="form-group mb-3">
            <label for="content">Content</label>
            <input class="form-control" id="content" placeholder="Content" name="content">
        </div>
        <div class="form-group mb-3">
            <label for="category_id">Category</label>
            <select class="form-select" id="category_id" name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="tags">Tags</label>
            <select class="form-select" id="tags" multiple name="tags[]">
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
