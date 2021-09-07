<?php

namespace Database\Seeders;

use App\Models\VitalSign;
use Illuminate\Database\Seeder;

class VitalSignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VitalSign::factory(500)->create();
    }
}
