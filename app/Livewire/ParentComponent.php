<?php

namespace App\Livewire;

use Livewire\Component;

class ParentComponent extends Component
{
    public $childValue = 'Initial Value';

    public function render()
    {
        return view('livewire.parent-component');
    }
}
