<?php

namespace App\Http\Livewire;

use App\Models\Farm;
use Livewire\Component;
use App\Models\Building;
use Usernotnull\Toast\Concerns\WireToast;


class DisplayFarm extends Component
{
    use WireToast;
    public Farm $farm;

    public function mount($id_farm) {
        $this->farm = Farm::find($id_farm);
    }

    function bought(Building $build){
        
        $build->farms()->updateExistingPivot($this->farm, ['bought' => true,]);
        $this->farm = $this->farm->refresh();
        toast()
            ->success('Construido!!')
            ->duration(3000)
            ->push();
    }

    public function render()
    {
        return view('livewire.display-farm');
    }
}
