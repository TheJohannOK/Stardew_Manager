<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buildings_animals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('building_id')->constrained();
            $table->foreignId('animal_id')->constrained();
            $table->boolean('bought')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buildings_animals');
    }
};
