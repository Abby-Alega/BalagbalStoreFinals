<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'product_id' should be unique for each inventory record,
            'product_id' => $this->faker->unique()->numberBetween(1, 15),
            'stock_quantity' => $this->faker->numberBetween(0, 500),
            'reorder_level' => $this->faker->numberBetween(5, 20),
            'max_stock_level' => $this->faker->numberBetween(50, 200),
            'last_restocked' => $this->faker->dateTimeBetween('-6 months', 'now'),
        ];
    }
}
