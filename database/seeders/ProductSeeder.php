<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product')->insert([
            ['code_product' => 'MA', 'name' => 'Mie Ayam', 'price' => 16000],
            ['code_product' => 'MAB', 'name' => 'Mie Ayam Bakso', 'price' => 18000],
            ['code_product' => 'MAP', 'name' => 'Mie Ayam Pangsit', 'price' => 18000],
            ['code_product' => 'MAK', 'name' => 'Mie Ayam Komplit', 'price' => 20000],
            ['code_product' => 'MAJ', 'name' => 'Mie Ayam JUMBO', 'price' => 27000],
            ['code_product' => 'SMP', 'name' => 'Sempol', 'price' => 13000],
            ['code_product' => 'EJ', 'name' => 'Es Jeruk', 'price' => 7000],
            ['code_product' => 'ET', 'name' => 'Es Teh', 'price' => 5000],
        ]);
    }
}
