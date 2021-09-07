<?php

namespace Database\Seeders;

use App\Models\Diagnostic;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            DoctorSeeder::class,
            NurseSeeder::class,
            RelativeSeeder::class,
            DiagnosticSeeder::class,
            MedicalHistorySeeder::class,
            PatientSeeder::class,
            VitalSignSeeder::class,
        ]);
    }
}
