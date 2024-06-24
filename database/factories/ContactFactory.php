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
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(18, 65),
            'sex' => $this->faker->word,
            'religion' => $this->faker->word,
            'civil_status' => $this->faker->word, // Using a word generator for 'civil_status'
            'date_of_birth' => $this->faker->date(),
            'location' => $this->faker->address,
            'phone_number' => $this->faker->phoneNumber,
        ];
    }
}
