<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Count extends Component
{
    public $count = 0;

    public function render()
    {
        return view('livewire.count');
    }

    public function add(){
        $this->count++;
    }
}
