<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>Str::random(10),
            "description"=>Str::random(20),
            "repair"=>Str::random(10),
            "work"=>Str::random(10),
        ];
    }
}
