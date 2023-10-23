<?php

namespace App\Livewire;

use Livewire\Attributes\Modelable;
use Livewire\Component;

class Input extends Component
{
    #[Modelable]
    public $selected = '';

    public function select(string $id)
    {
        $this->selected = $id;
    }

    public function render()
    {
        return view('livewire.input')
            ->with('products', [
                'tape', 'glue', 'nails'
            ]);
    }
}
