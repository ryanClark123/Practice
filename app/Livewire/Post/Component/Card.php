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
        // dd($this->post);
    }

    public function setVote($vote_type){
        $existingVote = $this->vote_type;

        if (!$existingVote) {
            $this->post->users()->attach(Auth::id(), ['vote_type' => $vote_type]);
        }

        else if ($existingVote === $vote_type) {
            $this->post->users()->detach(Auth::id());
        }

        else if ($existingVote !== $vote_type) {
            $this->post->users()->updateExistingPivot(Auth::id(), ['vote_type' => $vote_type]);
        }
    }


    

    public function render()
    {
        // $this->setVote();
        $this->vote_type = $this->post->voteByUser(Auth::id());
        return view('livewire.post.component.card');
    }
}
