<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['name' => 'Product 1', 'stock' => 39, 'category_id' => 1],
            ['name' => 'Product 2', 'stock' => 78, 'category_id' => 2],
            ['name' => 'Product 3', 'stock' => 118, 'category_id' => 3],
            ['name' => 'Product 4', 'stock' => 101, 'category_id' => 4],
            ['name' => 'Product 5', 'stock' => 46, 'category_id' => 5],
            ['name' => 'Product 6', 'stock' => 9, 'category_id' => 6],
            ['name' => 'Product 7', 'stock' => 57, 'category_id' => 7],
            ['name' => 'Product 8', 'stock' => 100, 'category_id' => 8],
            ['name' => 'Product 9', 'stock' => 65, 'category_id' => 9],
            ['name' => 'Product 10', 'stock' => 34, 'category_id' => 10],
            ['name' => 'Product 11', 'stock' => 58, 'category_id' => 1],
            ['name' => 'Product 12', 'stock' => 79, 'category_id' => 2],
            ['name' => 'Product 13', 'stock' => 92, 'category_id' => 3],
            ['name' => 'Product 14', 'stock' => 73, 'category_id' => 4],
            ['name' => 'Product 15', 'stock' => 87, 'category_id' => 5],
            ['name' => 'Product 16', 'stock' => 16, 'category_id' => 6],
            ['name' => 'Product 17', 'stock' => 91, 'category_id' => 7],
            ['name' => 'Product 18', 'stock' => 103, 'category_id' => 8],
            ['name' => 'Product 19', 'stock' => 35, 'category_id' => 9],
            ['name' => 'Product 20', 'stock' => 70, 'category_id' => 10],
            // Continúa con los datos restantes del SQL generado anteriormente...
        ]);
    }
}
