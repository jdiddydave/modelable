<?php

namespace App\Livewire;

use Livewire\Attributes\Modelable;
use Livewire\Component;

class ChildComponent extends Component
{
    #[Modelable]
    public $value = '';

    public function render()
    {
        return view('livewire.child-component');
    }
}
