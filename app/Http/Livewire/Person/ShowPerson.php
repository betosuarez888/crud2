<?php

namespace App\Http\Livewire\Person;

use Livewire\Component;
use App\Models\Persona;

class ShowPerson extends Component


{
   
    public function render()
    {
        return view('livewire.person.show-person');
    }
    public function cerrar(){
        $this->emit('cerrarShow');
    }
   
}
