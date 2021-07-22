<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      
        return [
            'status' => $this->faker->randomElement([1, 2]),
            'total' => $this->faker->randomNumber(),
            'date' => $this->faker->date('Y-M-D', 2000),
            'product_id' => Product::all()->random()->id,
            'user_id' => User::all()->random()->id
        ];
    }
}
