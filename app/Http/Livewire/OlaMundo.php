<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OlaMundo extends Component
{
    public $name = 'Wesley';
    public $comprimento = ['Salve quebrada'];
    public $surpreso = false;

    public function resetaNome()
    {
        $this->name = '';
    }

    public function mount(){
        $this->name = 'Marcelo';
    }

    public function updated(){
        $this->name = 'hydrate@';
    }

    public function render()
    {
        return view('livewire.ola-mundo');
    }
}
