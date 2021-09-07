<?php

namespace Database\Seeders;

use App\Models\Diagnostic;
use Illuminate\Database\Seeder;

class DiagnosticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Diagnostic::factory(15)->create();
    }
}
