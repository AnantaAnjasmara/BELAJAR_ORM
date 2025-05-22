<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Supplier;
use App\Models\Product;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    public function run()
    {
        // Buat kategori
        $categories = Category::factory()->count(5)->create();

        // Buat supplier
        $suppliers = Supplier::factory()->count(3)->create();

        // Buat produk
        Product::factory()->count(20)->create([
            'category_id' => function () use ($categories) {
                return $categories->random()->id;
            },
            'supplier_id' => function () use ($suppliers) {
                return $suppliers->random()->id;
            }
        ]);
    }
}
