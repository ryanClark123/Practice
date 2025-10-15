<?php

namespace Tests\Feature\Livewire\Post;

use App\Livewire\Post\View;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ViewTest extends TestCase
{
    public function test_renders_successfully()
    {
        Livewire::test(View::class)
            ->assertStatus(200);
    }
}
