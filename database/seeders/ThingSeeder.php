<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\thing;

class ThingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Thing::factory()->count(5)->create();
    }
}
