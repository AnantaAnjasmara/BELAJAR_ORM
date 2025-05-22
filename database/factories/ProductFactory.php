<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'stock' => $this->faker->numberBetween(0, 100),
            'category_id' => function () {
                return \App\Models\Category::factory()->create()->id;
            },
            'supplier_id' => function () {
                return \App\Models\Supplier::factory()->create()->id;
            },
        ];
    }
}
