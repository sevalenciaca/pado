<?php

namespace Database\Seeders;

use App\Models\Relative;
use Illuminate\Database\Seeder;

class RelativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Relative::factory(60)->create();
    }
}
