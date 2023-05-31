<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Delivery>
 */
class DeliveryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->name(),
            'contactno' => $this->faker->text(),
            'email' => $this->faker->text(),
            'street' => $this->faker->text(),
            'city' => $this->faker->text(),
            'province' => $this->faker->text(),
            'postalcode' => $this->faker->text(),
            'note' => $this->faker->text(),
        ];
    }
}
