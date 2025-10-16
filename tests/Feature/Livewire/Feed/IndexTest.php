<?php

namespace Tests\Feature\Livewire\Feed;

use App\Livewire\Feed\Index;
use App\Models\Posts;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class IndexTest extends TestCase
{
    use RefreshDatabase;
    public function test_renders_successfully()
    {
        Livewire::test(Index::class)
            ->assertStatus(200);
    }
}
