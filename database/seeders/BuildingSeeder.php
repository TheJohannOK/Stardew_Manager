<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\Building;
use App\Models\Material;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = Storage::disk('local')->get('/json/buildings.json');
        $buildings = json_decode($json,true);

        foreach($buildings as $building){
            Building::query()->updateOrCreate([
                'name' => $building['name'],
                'capacity' => $building['capacity'],
                'cost' => $building['cost'],
                'image' => $building['image']
            ]);
        }

        //Crear Relacion con Materiales

        //Materiales
        $Madera = Material::find(1);
        $Piedra = Material::find(2);

        //Edificios y conexion con Materiales
        $Establo = Building::find(1);
        $Establo->materials()->attach($Madera,['quantity'=>350]);
        $Establo->materials()->attach($Piedra,['quantity'=>150]);

        $Establo_grande = Building::find(2);
        $Establo_grande->materials()->attach($Madera,['quantity'=>800]);
        $Establo_grande->materials()->attach($Piedra,['quantity'=>350]);

        $Establo_lujo = Building::find(3);
        $Establo_lujo->materials()->attach($Madera,['quantity'=>1350]);
        $Establo_lujo->materials()->attach($Piedra,['quantity'=>650]);

        $Corral = Building::find(4);
        $Corral->materials()->attach($Madera,['quantity'=>300]);
        $Corral->materials()->attach($Piedra,['quantity'=>100]);

        $Corral_grande = Building::find(5);
        $Corral_grande->materials()->attach($Madera,['quantity'=>700]);
        $Corral_grande->materials()->attach($Piedra,['quantity'=>250]);

        $Corral_lujo = Building::find(6);
        $Corral_lujo->materials()->attach($Madera,['quantity'=>1200]);
        $Corral_lujo->materials()->attach($Piedra,['quantity'=>450]);


        //Relacion con Animales permitidos en una granja
        //Animales
        $Gallina = Animal::find(1);
        $Gallina_sombria = Animal::find(2);
        $Gallina_dorada = Animal::find(3);
        $Pato = Animal::find(4);
        $Conejo = Animal::find(5);
        $Dinosaurio = Animal::find(6);
        $Vaca = Animal::find(7);
        $Oveja = Animal::find(8);
        $Cerdo = Animal::find(9);
        $Avestruz = Animal::find(10);
        $Cabra = Animal::find(11);

        //Relacion Edi y Animal
        $Establo->allowed()->attach($Vaca);
        $Establo->allowed()->attach($Avestruz);

        $Establo_grande->allowed()->attach($Vaca);
        $Establo_grande->allowed()->attach($Avestruz);
        $Establo_grande->allowed()->attach($Cabra);

        $Establo_lujo->allowed()->attach($Vaca);
        $Establo_lujo->allowed()->attach($Avestruz);
        $Establo_lujo->allowed()->attach($Cabra);
        $Establo_lujo->allowed()->attach($Oveja);
        $Establo_lujo->allowed()->attach($Cerdo);

        $Corral->allowed()->attach($Gallina);

        $Corral_grande->allowed()->attach($Gallina);
        $Corral_grande->allowed()->attach($Pato);
        $Corral_grande->allowed()->attach($Gallina_sombria);
        $Corral_grande->allowed()->attach($Gallina_dorada);
        $Corral_grande->allowed()->attach($Dinosaurio);

        $Corral_lujo->allowed()->attach($Gallina);
        $Corral_lujo->allowed()->attach($Pato);
        $Corral_lujo->allowed()->attach($Gallina_sombria);
        $Corral_lujo->allowed()->attach($Gallina_dorada);
        $Corral_lujo->allowed()->attach($Dinosaurio);
        $Corral_lujo->allowed()->attach($Conejo);
    }
}
