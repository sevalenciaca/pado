<?php

namespace Database\Factories;

use App\Models\VitalSign;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class VitalSignFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VitalSign::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'oximetry' => $this->faker->numerify('##'),
            'respiratory_rate' => $this->faker->numerify('##'),
            'heart_rate' => $this->faker->numerify('##'),
            'temperature' => $this->faker->numerify('##'),
            'glysemia' => $this->faker->numerify('##'),
            'register_date' => $this->faker->date('Y-m-d', 'now'),
            'patient_id' => Patient::all()->random()->id,
        ];
    }
}
