<?php

namespace App\Livewire\Feed;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $perPage = 10;
    public function getPosts(){
        $post = Post::query()->orderBy('title', 'asc')->with(['user', 'users', 'upvotes', 'downvotes'])->paginate($this->perPage);
        // dd($post->orderBy('upvotes_count', 'desc')->paginate($this->perPage));
            // dd($post);
        return $post;

    }
    public function render()
    {
        $posts = $this->getPosts();
        return view('livewire.feed.index', ['posts'=>$posts]);
    }
}
