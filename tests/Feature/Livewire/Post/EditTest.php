<?php

namespace Tests\Feature\Livewire\Post;

use App\Livewire\Post\Edit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class EditTest extends TestCase
{
    public function test_renders_successfully()
    {
        Livewire::test(Edit::class)
            ->assertStatus(200);
    }
}
