<?php

namespace App\Livewire;

use Livewire\Component;

class CrearIngrediente extends Component
{
    public $name;
    public $descripcion;
    public $imagen;

    protected $rules = [
        'name' => 'required|string',
        'descripcion' => 'required|string'
    ];

    public function crearIngrediente(){
        $datos = $this->validate();
    }


    public function render()
    {
        return view('livewire.crear-ingrediente');
    }
}
