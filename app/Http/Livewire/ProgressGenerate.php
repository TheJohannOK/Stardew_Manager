<?php

namespace App\Http\Livewire;

use App\Models\Animal;
use Livewire\Component;

class ProgressGenerate extends Component
{

    public $num_G_N;

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


    public function submitForm()
    {
        Product::create([
            'name' => $this->name,
            'amount' => $this->amount,
            'description' => $this->description,
            'stock' => $this->stock,
            'status' => $this->status,
        ]);
  
        $this->successMessage = 'Product Created Successfully.';
  
        $this->clearForm();
  
        $this->currentStep = 1;
    }
}
