<?php

namespace App\Http\Livewire;

use App\Models\Farm;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Usernotnull\Toast\Concerns\WireToast;

class ShowFarms extends Component
{
    use WireToast; 

    public $farms;

    public function mount(){

        
    }

    public function render(){
        $current_user_id = Auth::user()->id;

        $this->farms = Farm::where('user_id',$current_user_id)->get();

        return view('livewire.show-farms');
    }

    public function delete(Farm $farm){

        $farm->delete();
        toast()
            ->success('Eliminado correctamente')
            ->duration(3000)
            ->push();
    }
}
