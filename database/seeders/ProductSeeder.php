<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Laptop Lenovo Legion',
            'description' => 'menggunakan prossesor i7 gen 12 dengan vga rtx 2060 sudah pasti kuat bermain game yang berat',
            'price' => 12000000,



        ]);
    }
}
