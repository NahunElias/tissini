<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'extract' => $this->faker->text(250),
            'price' => $this->faker->randomNumber(),
            /* 'size' => $this->faker->text(5), */
            'status' => $this->faker->randomElement([1, 2]),
            'user_id' => User::all()->random()->id,
            'category_id' => Category::all()->random()->id
        ];
    }
}
