<?php

namespace App\Livewire\Feed;

use Livewire\Component;
use App\Models\Post;

class Index extends Component
{
    public function getPosts(){
        return Post::orderBy('id', 'asc')->limit(40)->get('id');
    }
    public function render()
    {
        $posts = $this->getPosts();
        return view('livewire.feed.index', compact('posts'));
    }
}
