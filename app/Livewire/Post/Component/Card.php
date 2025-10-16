<?php

namespace App\Livewire\Post\Component;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;

class Card extends Component
{
    public $post, $vote_type;
    
    public function mount(Post $post){
        $this->post = $post;
        $this->vote_type = $post->voteByUser(Auth::id());
        // dd($this->vote_type);
    }

    public function upvote(){

    }

    public function downvote(){

    }

    public function render()
    {
        return view('livewire.post.component.card');
    }
}
