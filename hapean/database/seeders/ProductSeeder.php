<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Smartphone XYZ',
            'price' => 3000000,
            'category' => 'Android',
            'description' => 'Smartphone canggih dengan RAM 8GB',
            'image' => 'path/to/image.jpg', // Pastikan ada kolom image di database
        ]);
    }
}



