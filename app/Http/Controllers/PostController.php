<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class PostController extends BaseController
{
    public function index() {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function create() {
        $categories = Category::all();
        $tags = Tag::all();

        return view('post.create', compact('categories', 'tags'));
    }

    public function store(PostRequest $request) {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('post.create');
    }

    public function show(Post $post) {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post) {
        $categories = Category::all();

        return view('post.edit', compact('post', 'categories'));
    }

    public function update(PostRequest $request ,Post $post) {
        $data = $request->validated();

        $this->service->update($post, $data);

        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post) {
        $post->delete();

        return redirect()->route('post.index', $post->id);
    }
}
