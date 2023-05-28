<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Charts\GAnimals;

class ShowChart extends Component
{
    public $dataPoints;
    
    public function mount()
    {
        
    }

    public function render()
    {
        $this->dataPoints = array(
            array("label"=> "Education", "y"=> 284935),
            array("label"=> "Entertainment", "y"=> 256548),
            array("label"=> "Lifestyle", "y"=> 245214),
            array("label"=> "Business", "y"=> 233464),
            array("label"=> "Music & Audio", "y"=> 200285),
            array("label"=> "Personalization", "y"=> 194422),
            array("label"=> "Tools", "y"=> 180337),
            array("label"=> "Books & Reference", "y"=> 172340),
            array("label"=> "Travel & Local", "y"=> 118187),
            array("label"=> "Puzzle", "y"=> 107530)
        );
        return view('livewire.show-chart');
    }
}
