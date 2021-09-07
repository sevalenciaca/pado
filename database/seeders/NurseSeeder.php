<?php

namespace Database\Seeders;

use App\Models\Nurse;
use Illuminate\Database\Seeder;

class NurseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nurse::factory(10)->create();
    }
}
