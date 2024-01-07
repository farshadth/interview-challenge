<?php

namespace Database\Factories;

use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid'                     => $this->faker->uuid,
            'provider_id'              => Provider::factory()->create()->id,
            'name'                     => $this->faker->name,
            'quantity'                 => $this->faker->numberBetween(1, 10),
            'status'                   => $this->faker->boolean,
            'comment_status'           => $this->faker->boolean,
            'comment_status_after_buy' => $this->faker->boolean,
            'vote_status'              => $this->faker->boolean,
            'vote_status_after_buy'    => $this->faker->boolean,
        ];
    }
}
