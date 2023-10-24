<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Modelable;

class ChildComponent extends Component
{
    #[Modelable]
    public $value = '';

    public function render()
    {
        return view('livewire.child-component');
    }
}
