<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Order_Detail;
use Illuminate\Database\Eloquent\Factories\Factory;

class Order_DetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order_Detail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price_unit' => $this->faker->randomNumber(),
            'amount' => $this->faker->randomNumber(),
            'send' => $this->faker->randomNumber(),
           
            'order_id' => Order::all()->random()->id
        ];
    }
}
