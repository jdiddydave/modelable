<?php

namespace App\Livewire;

use Livewire\Component;

class Form extends Component
{
    public $product = '';

    // @devs: you can uncomment this and the button on form.blade.php to manually update
    // public function update()
    // {
    //     return true;
    // }

    public function render()
    {
        return view('livewire.form');
    }
}
