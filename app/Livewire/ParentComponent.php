<?php

namespace App\Livewire;

use Livewire\Component;

class ParentComponent extends Component
{
    public $child = 'Starting Value';

    public function click()
    {
        // it seems we need a click for the wire:model value to update
        return true;
    }

    public function render()
    {
        return view('livewire.parent-component');
    }
}
