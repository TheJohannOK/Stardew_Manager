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
        $current_user_id = Auth::user()->id;

        $this->farms = Farm::where('user_id',$current_user_id)->get();
    }

    public function render(){
        return view('livewire.show-farms');
    }

    function redirect1(){
        return redirect()->to('/progreso-granjero');
    }

    public function delete(Farm $farm){

        $farm->delete();
        $this->farms = Farm::where('user_id',Auth::user()->id)->get();
        toast()
            ->success('Eliminado correctamente')
            ->duration(3000)
            ->push();
    }

    public function showfarm($farmId){

        return redirect()->to('/managing-farm/' . $farmId);
    }
}
