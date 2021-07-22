<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Order;
use App\Models\Order_Detail;
use App\Models\Size;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('public/products');
        Storage::makeDirectory('public/products');

        $this->call(UserSeeder::class);
        Category::factory(4)->create();
        $this->call(ProductSeeder::class);
        Order::factory(4)->create();
        Order_Detail::factory(4)->create();
        Size::factory(100)->create();
    }
}
