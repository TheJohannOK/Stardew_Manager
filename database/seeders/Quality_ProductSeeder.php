<?php

namespace Database\Seeders;

use App\Models\Product_Quality;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Quality_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = Storage::disk('local')->get('/json/quality_products.json');
        $quality_products = json_decode($json,true);

        foreach($quality_products as $quality_product){
            Product_Quality::query()->updateOrCreate([
                'name' => $quality_product['name'],
                'capacity' => $quality_product['capacity'],
                'cost' => $quality_product['cost'],
                'image' => $quality_product['image']
            ]);
        }
    }
}
