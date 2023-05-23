<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = Storage::disk('local')->get('/json/animals.json');
        $animals = json_decode($json,true);

        foreach($animals as $animal){
            Animal::query()->updateOrCreate([
                'name' => $animal['name'],
                'cost' => $animal['cost'],
                'image' => $animal['image'],
                'interval' => $animal['interval']
            ]);
        }
    }
}
