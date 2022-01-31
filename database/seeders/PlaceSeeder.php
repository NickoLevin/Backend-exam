<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\place;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Place::factory()->count(5)->create();
    }
}
