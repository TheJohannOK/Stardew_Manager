<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = Storage::disk('local')->get('/json/materials.json');
        $materials = json_decode($json,true);

        foreach($materials as $material){
            Material::query()->updateOrCreate([
                'name' => $material['name'],
                'image' => $material['image']
            ]);
        }
    }
}
