<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gender;
use App\Models\Universe;
use App\Models\Superhero;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Gender::create(['name' => 'Male']);
        Gender::create(['name' => 'Female']);
        Gender::create(['name' => 'Other']);

        Universe::create(['name' => 'Marvel']);
        Universe::create(['name' => 'DC']);

        Superhero::factory(10)->create();
    }
}
