<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public $item = '';
    public $lista = [];
    public $key = 0;
    public $funcao = 'Adicionar';

    public function add(){
        array_push($this->lista, $this->item);
        $this->item = '';
    }

    public function deletas(int $key){
        unset($this->lista[$key]);
    }

    public function editar(int $key){
        $this->item = $this->lista[$key];
        $this->key = $key;
        $this->funcao = 'Editar';
    }

    public function atualizar(){
        $this->lista = array_replace($this->lista, [$this->key => $this->item]);
        $this->item = '';
        $this->funcao = 'Adicionar';
    }

    public function render()
    {
        return view('livewire.todo');
    }
}
