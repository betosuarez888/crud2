<?php

namespace App\Http\Livewire\Person;

use Livewire\Component;
use App\Models\Persona;

class IndexPerson extends Component
{


    public $isOpenCreateModal=false;
    public $isOpenShow=false;
    protected $listeners = ['cerrarModal','cerrarShow'];
    
  
    
    public $persona;
   



    public function render()
    {
        $personas = Persona::all();
        return view('livewire.person.index-person', compact('personas'));
    }

    
    public function abrirModal(){
        $this->isOpenCreateModal= true;
    }
    public function cerrarModal(){
        $this->isOpenCreateModal= false;
    }
     //aqui las funciones de Mostrar
    public function abrirShow(){
        $this->isOpenShow= true;

    }
    public function cerrarShow(){
        $this->isOpenShow= false;

    }

    
 
}
