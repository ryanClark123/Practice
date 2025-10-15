<?php

namespace App\Livewire\Post\Component;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class Card extends Component
{
    public Post $post;
    
    public function mount(Post $post_id){
        $this->post = $post_id;
    }

    public function render()
    {
        return view('livewire.post.component.card');
    }
}
