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
        return Post::orderBy('id', 'asc')->with(['user', 'users', 'upvotes', 'downvotes'])->paginate($this->perPage);
    }
    public function render()
    {
        $posts = $this->getPosts();
        return view('livewire.feed.index', ['posts'=>$posts]);
    }
}
