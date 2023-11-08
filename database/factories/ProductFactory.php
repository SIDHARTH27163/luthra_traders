<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
            'p_name' => "Iphoe 12",
           
            'image' => "1699344624.png",
            'desc' => $this->faker->text(),
            
            'b_name' => "Iphone",
            'category' => "Mobile Phone",
            'm_name' => "Iphoe 12",
            'price' => "125000",
            'discount' => "5.5%",
            'emi_cost' => "12/month",
            'r_time' => "1month",
            'w_policy' => "Available",
        ];
    }
}
