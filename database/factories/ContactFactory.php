<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition(): array
    {
        return [
            'photo' => $this->faker->imageUrl(640, 480, 'people', true, 'Faker'),
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(18, 65),
            'sex' => $this->faker->word,
            'phoneNumber' => $this->faker->phoneNumber(),
            'status' => $this->faker->word,
            'location' => $this->faker->address,

        ];
    }
}
