<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'review' => $this->faker->text(),
            'rating'=>"3",
            'status'=>"1",
            'date'=>"09/11/2023",
            'name'=>"Sidharth Guleria"
        ];
    }
}
