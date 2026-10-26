<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EcommerceSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Nusa Basic Tee',
                'description' => 'Kaos basic premium yang nyaman untuk sehari-hari.',
                'price' => 89000,
                'image' => 'nusa-basic-tee.jpg',
                'category' => 'Kaos',
            ],
            [
                'name' => 'Nusa Oversized Tee',
                'description' => 'Kaos oversized dengan potongan modern.',
                'price' => 129000,
                'image' => 'nusa-oversized-tee.jpg',
                'category' => 'Kaos',
            ],
            [
                'name' => 'Nusa Oxford Shirt',
                'description' => 'Kemeja minimalis untuk gaya kasual dan formal.',
                'price' => 179000,
                'image' => 'nusa-oxford-shirt.jpg',
                'category' => 'Kemeja',
            ],
            [
                'name' => 'Nusa Linen Shirt',
                'description' => 'Kemeja linen ringan dan nyaman digunakan.',
                'price' => 199000,
                'image' => 'nusa-linen-shirt.jpg',
                'category' => 'Kemeja',
            ],
            [
                'name' => 'Nusa Hoodie',
                'description' => 'Hoodie kasual dengan bahan lembut.',
                'price' => 229000,
                'image' => 'nusa-hoodie.jpg',
                'category' => 'Hoodie',
            ],
            [
                'name' => 'Nusa Crewneck',
                'description' => 'Crewneck simpel yang mudah dipadukan.',
                'price' => 189000,
                'image' => 'nusa-crewneck.jpg',
                'category' => 'Sweatshirt',
            ],
        ];

        foreach ($products as $product) {
            DB::table('ecommerce')->updateOrInsert(
                ['name' => $product['name']],
                array_merge($product, [
                    'updated_at' => now(),
                ])
            );
        }
    }
}
