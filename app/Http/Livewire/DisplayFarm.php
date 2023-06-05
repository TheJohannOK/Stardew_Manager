<?php

namespace App\Http\Livewire;

use App\Models\Farm;
use Livewire\Component;
use App\Models\Building;
use Illuminate\Support\Facades\DB;
use Usernotnull\Toast\Concerns\WireToast;


class DisplayFarm extends Component
{
    use WireToast;
    public Farm $farm;

    public function mount($id_farm) {
        $this->farm = Farm::find($id_farm);
    }

    function bought($build){

        // Actualizar la columna 'bought' en la tabla pivot para los edificios encontrados
        $hola = DB::table('farms_buildings')
        ->where('id', $build)
        ->delete();       
        
        $this->farm = $this->farm->refresh();
        
        toast()
            ->success('Construido!!')
            ->duration(3000)
            ->push();
    }

    function redirect1(){
        return redirect()->to('/progreso-granjero');
    }

    function redirect2(){
        return redirect()->to('/granjas');
    }

    public function render()
    {
        return view('livewire.display-farm');
    }
}
