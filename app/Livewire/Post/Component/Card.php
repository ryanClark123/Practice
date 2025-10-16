<?php

namespace App\Livewire\Post\Component;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class Card extends Component
{
    public $post;
    public $author;

    public function mount(Post $post){
        $this->post = $post;
        // dd($this->post);
    }

    public function render()
    {
        return view('livewire.post.component.card');
    }
}
