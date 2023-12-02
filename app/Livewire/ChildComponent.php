<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Modelable;

class ChildComponent extends Component
{
    #[Modelable]
    public $foo = '';

    public function render()
    {
        return view('livewire.child-component');
    }
}
