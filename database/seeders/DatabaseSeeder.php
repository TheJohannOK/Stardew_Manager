<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AnimalSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\BuildingSeeder;
use Database\Seeders\MaterialSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AnimalSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(MaterialSeeder::class);
        $this->call(BuildingSeeder::class);

    }
}
