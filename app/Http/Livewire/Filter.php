<?php

namespace App\Http\Livewire;

use App\Models\Animal;
use Livewire\Component;

class Filter extends Component
{
    public $selectedAnimal = null;

    public $animals;

    public function mount(){

        $this->animals = Animal::all();
    }

    public function onAnimalChange()
    {
        $this->emit('animal-selected', $this->selectedAnimal);
    }

    public function render()
    {
        return view('livewire.filter');
    }
}
