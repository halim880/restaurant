<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_number'=> rand(1000000, 9999999),
            'customer_id'=> rand(1,100),
            'gtotal'=> rand(100, 1000),
        ];
    }
}
