<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = Storage::disk('local')->get('/json/products.json');
        $products = json_decode($json,true);

        foreach($products as $product){
            Product::query()->updateOrCreate([
                'name' => $product['name'],
                'quantity' => $product['quantity'],
                'animal_id' => $product['animal_id'],
                'product_id' => $product['product_id'],
                'type' => $product['type'],
                'probability' => $product['probability'],
                'image' => $product['image']
            ]);
        }
    }
}
