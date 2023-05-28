<?php

namespace App\Http\Livewire;

use App\Models\Animal;
use Livewire\Component;

class ProgressGenerate extends Component
{


    public $animals;

    public $prueba;

    public function mount(){
        $this->animals = Animal::orderBy('id')->get();

        $this->prueba = "Juan";
    }

    public function render()
    {
       
        return view('livewire.progress-generate' ); 
    }
}
