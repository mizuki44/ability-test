<?php

namespace Database\Factories;

use App\Models\Contact;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1,5),
            'first_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'gender' => $this->faker->numberBetween(1,3),
            'email' => $this->faker->safeEmail(),
            'tel' => $this->faker->numberBetween(10,11),
            'address' => $this->faker->city(),
            'building' => $this->faker->word(15),
            'detail' => $this->faker->text(100),
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),

        ];
    }
}
