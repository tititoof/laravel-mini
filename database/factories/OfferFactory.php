<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'quotation' => fake()->sentence(),
            'price' => fake()->randomNumber(5, false),
            'specificities' => fake()->sentence(),
            'conditions' => fake()->sentence(),
            'address_id' => Address::factory(),
            'customer_id' => Customer::factory(),
            'contact_id' => Contact::factory()
        ];
    }
}
