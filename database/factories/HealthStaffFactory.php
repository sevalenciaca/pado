<?php

namespace Database\Factories;

use App\Models\HealthStaff;
use App\Models\TypeHealthStaff;
use Illuminate\Database\Eloquent\Factories\Factory;

class HealthStaffFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HealthStaff::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'document' => $this->faker->numerify('##########'),
            'full_name' => $this->faker->name(),
            'type_health_staff_id' => TypeHealthStaff::all()->random()->id,
        ];
    }
}
