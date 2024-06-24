<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Island;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Island>
 */
class IslandFactory extends Factory
{
    protected $model = Island::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'location' => $this->faker->unique()->address,
            'description' => $this->faker->text,
            'size' => $this->faker->numberBetween(1, 10000),
        ];
    }
}
