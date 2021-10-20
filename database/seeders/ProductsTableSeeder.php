<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Laptops
        for ($i = 1; $i <= 7; $i++) {
            Product::create([
                'name' => 'Laptop ' . $i,
                'slug' => 'laptop-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);
        }


        // Desktops
        for ($i = 1; $i <= 7; $i++) {
            Product::create([
                'name' => 'Desktop ' . $i,
                'slug' => 'desktop-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);
        }

        // Phones
        for ($i = 1; $i <= 7; $i++) {
            Product::create([
                'name' => 'Phone ' . $i,
                'slug' => 'phone-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);
        }

        // Tablets
        for ($i = 1; $i <= 7; $i++) {
            Product::create([
                'name' => 'Tablet ' . $i,
                'slug' => 'tablet-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);
        }
    }
}
