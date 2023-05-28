<?php

namespace App\Http\Livewire;

use App\Models\Farm;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ShowFarms extends Component
{
    public $farms;

    public function mount(){

        $current_user_id = Auth::user()->id;

        $this->farms = Farm::where('user_id',$current_user_id)->get();
    }

    public function render()
    {
        return view('livewire.show-farms');
    }
}
