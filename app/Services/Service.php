<?php

namespace App\Services;

use App\Models\Post;

class Service
{
    public function store($data) {
        $tags = $data['tags'];
        unset($data['tags']);

        $post = Post::create($data);
        $post->tags()->attach($tags);
    }

    public function update($post, $data) {
        $post->update($data);
    }
}
