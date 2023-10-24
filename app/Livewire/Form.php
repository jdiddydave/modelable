<?php

namespace App\Livewire;

use Livewire\Component;

class Form extends Component
{
    public $product = '';

    public function render()
    {
        return view('livewire.form');
    }
}
