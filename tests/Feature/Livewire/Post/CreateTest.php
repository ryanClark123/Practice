<?php

namespace Tests\Feature\Livewire\Post;

use App\Livewire\Post\Create;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateTest extends TestCase
{
    public function test_renders_successfully()
    {
        Livewire::test(Create::class)
            ->assertStatus(200);
    }
}
