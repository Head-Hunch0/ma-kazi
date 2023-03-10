<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\listings>
 */
class listingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->sentence(),
            'tags' => 'laravel , api , backend , frontend',
            'company' => $this->faker->company(),
            'email' => $this->faker->Companyemail(),
            'website' => $this->faker->url(),
            'location' => $this->faker->city(),
            'salary' => $this->faker->randomFloat(),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
