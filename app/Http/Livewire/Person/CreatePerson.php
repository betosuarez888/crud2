<?php

namespace App\Http\Livewire\Person;

use Livewire\Component;
use App\Models\Persona;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class CreatePerson extends Component
{
    use LivewireAlert;
    
    public $nombre, $edad;

    protected $rules = [
        'nombre' => 'required|max:50',
        'edad' => 'required|integer|max:110|min:8',
    ];
    
    public function render()
    {
        return view('livewire.person.create-person');
    }

    public function limpiarCampos(){
        $this->nombre='';
        $this->edad='';
        //$this->reset(['nombre' , 'edad']);
    }

    public function close(){
        $this->emit('cerrarModal');
    }

    public function store(){

        $this->validate();
        
        $persona  = new Persona();
        $persona->nombre = $this->nombre;
        $persona->edad = $this->edad;
        $persona->created_at = now();
        $persona->save();
        
        /* Persona::create([
            'nombre' => $this->nombre,
            'edad' => $this->edad,
            'created_at' => now()
        ]); */
        $this->limpiarCampos();
        $this->close();
        $this->alert('success', 'Nueva Persona Creada');
    }


}
