<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Form;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class FormTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Form::class)
            ->assertStatus(200);
    }
}
