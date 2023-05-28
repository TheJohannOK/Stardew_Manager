<?php

use App\Models\Animal;

if (! function_exists('animals')) {
    function animals()
    {
        return Animal::orderBy('id')->get();
    }
}