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

        $this->asignarAnimales(1, 'Gallina normal', $this->num_G_Nor, $farm);
        $this->asignarAnimales(2, 'Gallina sombría', $this->num_G_Som, $farm);
        $this->asignarAnimales(3, 'Gallina dorada', $this->num_G_Dor, $farm);
        $this->asignarAnimales(4, 'Pato', $this->num_Pat, $farm);
        $this->asignarAnimales(5, 'Conejo', $this->num_Con, $farm);
        $this->asignarAnimales(6, 'Dinosaurio', $this->num_Din, $farm);
        $this->asignarAnimales(7, 'Vaca', $this->num_Vac, $farm);
        $this->asignarAnimales(8, 'Oveja', $this->num_Ove, $farm);
        $this->asignarAnimales(9, 'Cerdo', $this->num_Cer, $farm);
        $this->asignarAnimales(10, 'Avestruz', $this->num_Ave, $farm);
        $this->asignarAnimales(11, 'Cabra', $this->num_Cab, $farm);

        return redirect()->to('/managing-farm/' . $farm->id);
        toast()
            ->success('Granja creada!!')
            ->duration(3000)
            ->push();
    }

    function asignarAnimales($animalId, $animalName, $numAnimales, $farm)
    {
        if ($numAnimales !== 0) {
            $animal = Animal::find($animalId);
            $edificios = $animal->allowed->sortByDesc('capacity');
            $capacidades = [];
            foreach ($edificios as $edificio) {
                $capacidades[] = $edificio->capacity;
            }
            $granjas = $this->n_edi_necesarios($numAnimales, $capacidades);
    
            $count = 0;
            foreach ($edificios as $edificio) {
                if ($numAnimales <= 0) {
                    break; // Si no hay más animales para asignar, se rompe el bucle principal
                }
    
                $n_granjas = $granjas[$count]; // Obtiene el número de granjas necesarias para el edificio actual
    
                if ($n_granjas !== 0) {
                    for ($j = 0; $j < $n_granjas; $j++) { // Itera a través de cada granja necesaria para el edificio actual
                        $farm->buildings()->attach($edificio);
                        $capacity = $edificio->capacity; // Obtiene la capacidad del edificio actual
    
                        if ($numAnimales <= 0) {
                            break; // Si no hay más animales para asignar, se rompe el bucle interno
                        }
    
                        for ($k = 1; $k <= $capacity; $k++) { // Itera hasta que se alcance la capacidad del edificio actual
                            if ($numAnimales <= 0) {
                                break; // Si no hay más animales para asignar, se rompe el bucle más interno
                            }
    
                            $edificio->animals()->attach($animal); // Asigna el animal al edificio actual
                            $numAnimales--; // Reduce el contador de animales restantes
                        }
                    }
                }
                $count++;
            }
        }
    }


}