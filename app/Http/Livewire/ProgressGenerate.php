<?php

namespace App\Http\Livewire;

use App\Models\Farm;
use App\Models\Animal;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Usernotnull\Toast\Concerns\WireToast;

class ProgressGenerate extends Component
{
    use WireToast;

    public $num_G_Nor = 0, $num_G_Som = 0, $num_G_Dor = 0, $num_Pat = 0, $num_Con = 0, $num_Din = 0, $num_Vac = 0, $num_Ove = 0, $num_Cer = 0, $num_Ave = 0, $num_Cab = 0, $nombre_granja; 

    public function mount(){

    }

    public function render()
    {
       
        return view('livewire.progress-generate' ); 
    }
 

    function n_edi_necesarios($numero, $capacidad) {
        $totalGranjas = array_fill(0, count($capacidad), 0); // Número de elementos en cada granja
    
        for ($i = 0; $i < count($capacidad); $i++) {
            if ($numero > 0) {
                if ($i === count($capacidad) - 1) {
                    // Comprobar si estamos en la última iteración
                    $cantidadGranjas = ceil($numero / $capacidad[$i]); // Calcula la cantidad de granjas completas para la última capacidad
                    $totalGranjas[$i] = $cantidadGranjas; // Asigna la cantidad de granjas completas a la última posición en totalGranjas
                } else {
                    // No es la última iteración
                    $cantidadGranjas = floor($numero / $capacidad[$i]); // Calcula la cantidad de granjas completas que se pueden asignar
                    $totalGranjas[$i] = $cantidadGranjas; // Asigna la cantidad de granjas completas a la posición correspondiente en totalGranjas
                    $numero -= $cantidadGranjas * $capacidad[$i]; // Resta la cantidad de elementos asignados de la cantidad total
                }
            }
        }
    
        return $totalGranjas;
    }
    

    public function submit()
{
    $farm = Farm::create([
        'name' => $this->nombre_granja,
        'user_id' => Auth::id()
    ]);

    if ($this->num_G_Nor !== 0) {
        $Gallina = Animal::find(1);
        $Edicios_per_nor = $Gallina->allowed->sortByDesc('capacity');
        $capacidades_G_Nor = [];
        foreach ($Edicios_per_nor as $edificio) {
            $capacidades_G_Nor[] = $edificio->capacity;
        }
        toast()
            ->success(implode(' ', $capacidades_G_Nor))
            ->duration(10000)
            ->push();
        $granjas_G_Nor = $this->n_edi_necesarios($this->num_G_Nor, $capacidades_G_Nor);
        
        toast()
            ->success(implode(' ', $granjas_G_Nor))
            ->duration(10000)
            ->push();
    }

    if ($this->num_G_Som !== 0) {
        $Gallina_sombria = Animal::find(2);
        $Edicios_per_som = $Gallina_sombria->allowed->sortByDesc('capacity');
        $capacidades_G_Som = [];
        foreach ($Edicios_per_som as $edificio) {
            $capacidades_G_Som[] = $edificio->capacity;
        }
        $granjas_G_Som = $this->n_edi_necesarios($this->num_G_Som, $capacidades_G_Som);
        
        // Resto del código
    }

    if ($this->num_G_Dor !== 0) {
        $Gallina_dorada = Animal::find(3);
        $Edicios_per_dor = $Gallina_dorada->allowed->sortByDesc('capacity');
        $capacidades_G_Dor = [];
        foreach ($Edicios_per_dor as $edificio) {
            $capacidades_G_Dor[] = $edificio->capacity;
        }
        $granjas_G_Dor = $this->n_edi_necesarios($this->num_G_Dor, $capacidades_G_Dor);
        
        // Resto del código
    }

    if ($this->num_Pat !== 0) {
        $Pato = Animal::find(4);
        $Edicios_pat = $Pato->allowed->sortByDesc('capacity');
        $capacidades_Pat = [];
        foreach ($Edicios_pat as $edificio) {
            $capacidades_Pat[] = $edificio->capacity;
        }
        $granjas_Pat = $this->n_edi_necesarios($this->num_Pat, $capacidades_Pat);
        
        // Resto del código
    }

    if ($this->num_Con !== 0) {
        $Conejo = Animal::find(5);
        $Edicios_con = $Conejo->allowed->sortByDesc('capacity');
        $capacidades_Con = [];
        foreach ($Edicios_con as $edificio) {
            $capacidades_Con[] = $edificio->capacity;
        }
        $granjas_Con = $this->n_edi_necesarios($this->num_Con, $capacidades_Con);
        
        // Resto del código
    }

    if ($this->num_Din !== 0) {
        $Dinosaurio = Animal::find(6);
        $Edicios_din = $Dinosaurio->allowed->sortByDesc('capacity');
        $capacidades_Din = [];
        foreach ($Edicios_din as $edificio) {
            $capacidades_Din[] = $edificio->capacity;
        }
        $granjas_Din = $this->n_edi_necesarios($this->num_Din, $capacidades_Din);
        
        // Resto del código
    }

    if ($this->num_Vac !== 0) {
        $Vaca = Animal::find(7);
        $Edicios_vac = $Vaca->allowed->sortByDesc('capacity');
        $capacidades_Vac = [];
        foreach ($Edicios_vac as $edificio) {
            $capacidades_Vac[] = $edificio->capacity;
        }
        $granjas_Vac = $this->n_edi_necesarios($this->num_Vac, $capacidades_Vac);
        
        // Resto del código
    }

    if ($this->num_Ove !== 0) {
        $Oveja = Animal::find(8);
        $Edicios_ove = $Oveja->allowed->sortByDesc('capacity');
        $capacidades_Ove = [];
        foreach ($Edicios_ove as $edificio) {
            $capacidades_Ove[] = $edificio->capacity;
        }
        $granjas_Ove = $this->n_edi_necesarios($this->num_Ove, $capacidades_Ove);
        
        // Resto del código
    }

    if ($this->num_Cer !== 0) {
        $Cerdo = Animal::find(9);
        $Edicios_cer = $Cerdo->allowed->sortByDesc('capacity');
        $capacidades_Cer = [];
        foreach ($Edicios_cer as $edificio) {
            $capacidades_Cer[] = $edificio->capacity;
        }
        $granjas_Cer = $this->n_edi_necesarios($this->num_Cer, $capacidades_Cer);
        
        // Resto del código
    }

    if ($this->num_Ave !== 0) {
        $Avestruz = Animal::find(10);
        $Edicios_ave = $Avestruz->allowed->sortByDesc('capacity');
        $capacidades_Ave = [];
        foreach ($Edicios_ave as $edificio) {
            $capacidades_Ave[] = $edificio->capacity;
        }
        $granjas_Ave = $this->n_edi_necesarios($this->num_Ave, $capacidades_Ave);
        
        // Resto del código
    }

    if ($this->num_Cab !== 0) {
        $Cabra = Animal::find(11);
        $Edicios_cab = $Cabra->allowed->sortByDesc('capacity');
        $capacidades_Cab = [];
        foreach ($Edicios_cab as $edificio) {
            $capacidades_Cab[] = $edificio->capacity;
        }
        $granjas_Cab = $this->n_edi_necesarios($this->num_Cab, $capacidades_Cab);
        
    }

}

}