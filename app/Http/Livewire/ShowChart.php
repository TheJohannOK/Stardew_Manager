<?php

namespace App\Http\Livewire;

use App\Models\Animal;
use App\Models\Product;
use App\Models\Product_Quality;
use Livewire\Component;

class ShowChart extends Component
{
    public $dataPoints;

    public $intervals;

    public function render()
    {
        $animals = Animal::all();
        $this->dataPoints = [];
        $this->intervals = [];

        foreach ($animals as $animal) {
            $products = $animal->products;
            $productProbabilities = [];

            // Para 
            $this->intervals[] = [$animal->interval];
        
            foreach ($products as $product) {
                $qualities = $product->qualities;
        
                foreach ($qualities as $quality) {
                    if (isset($productProbabilities[$product->type])) {
                        // Si ya tenemos un producto del mismo tipo, calculamos la probabilidad acumulada
                        $productProbabilities[$product->type] += $quality->probability;
                    } else {
                        // Si es el primer producto del tipo, simplemente lo agregamos a la lista
                        $productProbabilities[$product->type] = $quality->probability;
                    }
                }
            }
        
            // Agregar los productos con sus probabilidades al arreglo de datos
            foreach ($productProbabilities as $type => $probability) {
                // Obtener el primer producto del tipo
                $product = $products->where('type', $type)->first();
        
                // Verificar si se encontró un producto
                if ($product) {
                    // Verificar si el producto es de tipo "artisan"
                    if ($product->type === 'artisan') {
                        // Obtener el precio del producto "artisan"
                        $artisanProduct = Product::find($product->product_id);
                        if ($artisanProduct) {
                            $dataPoints[] = [
                                'label' => $animal->name,
                                'y' => $artisanProduct->price,
                            ];
                        }
                    } else {
                        // Obtener la calidad del producto
                        $quality = $product->qualities->first();
        
                        // Verificar si se encontró una calidad
                        if ($quality) {
                            $dataPoints[] = [
                                'label' => $animal->name,
                                'y' => $quality->price,
                            ];
                        }
                    }
                }
            }
        }

        $this->dataPoints = $dataPoints;


        
        return view('livewire.show-chart');
    }
}
