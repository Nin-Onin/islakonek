<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Island;

class IslandFactory extends Factory
{
    protected $model = Island::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'area' => $this->faker->numberBetween(1, 100000),
            'total_population' => $this->faker->numberBetween(0, 1000000),
            'islandImage' => $this->faker->imageUrl(640, 480, 'island', true),
        ];
    }
}
