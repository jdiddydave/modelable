<?php

namespace App\Livewire;

use Livewire\Component;

class ParentComponent extends Component
{
    public $message = 'Hello World';

    public function render()
    {
        return view('livewire.parent-component');
    }
}
