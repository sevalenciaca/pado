<?php

namespace Database\Factories;

use App\Models\Relative;
use Illuminate\Database\Eloquent\Factories\Factory;

class RelativeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Relative::class;

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
            'address' => $this->faker->word(15),
            'phone' => $this->faker->phoneNumber(9),
            'email' => $this->faker->safeEmail(),
            'city' => $this->faker->city(),
        ];
    }
}
