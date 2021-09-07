<?php

namespace Database\Factories;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Nurse;
use App\Models\Diagnostic;
use App\Models\Relative;
use App\Models\MedicalHistory;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'document' => $this->faker->numerify('##########'),
            'name' => $this->faker->name(),
            'last_name' => $this->faker->lastName(),
            'gender' => $this->faker->randomElement(['Hombre', 'Mujer']),
            'born_date' => $this->faker->date('Y-m-d', 'now'),
            'eps' => $this->faker->randomElement(['Sura', 'Nueva EPS', 'Salud Total', 'Sanitas']),
            'address' => $this->faker->word(15),
            'phone' => $this->faker->phoneNumber(9),
            'email' => $this->faker->safeEmail(),
            'city' => $this->faker->city(),
            'kinship' => $this->faker->word(10),
            'doctor_id' => Doctor::all()->random()->id,
            'nurse_id' => Nurse::all()->random()->id,
            'medical_history_id' => MedicalHistory::all()->random()->id,
            'diagnostic_id' => Diagnostic::all()->random()->id,
            'relative_id' => Relative::all()->random()->id
        ];
    }
}
