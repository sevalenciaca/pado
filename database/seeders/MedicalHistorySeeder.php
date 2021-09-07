<?php

namespace Database\Seeders;

use App\Models\MedicalHistory;
use Illuminate\Database\Seeder;

class MedicalHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MedicalHistory::factory(30)->create();
    }
}
