<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'code' => 'SP0001',
            'name' => 'Dien thoai iPhone 14 Pro 128GB ',
            'price' => '30490000',
        ]);
        DB::table('products')->insert([
            'code' => 'SP0002',
            'name' => 'Laptop Apple MacBook Air M1 2020 8GB/256GB/7-core GPU (MGN93SA/A)',
            'price' => '27490000',
        ]);
        DB::table('products')->insert([
            'code' => 'SP0003',
            'name' => 'Laptop Lenovo Yoga Duet 7 13ITL6 i7 1165G7/16GB/1TB SSD/Touch/Pen/Win10 (82MA003UVN)',
            'price' => '26790000',
        ]);
        DB::table('products')->insert([
            'code' => 'SP0004',
            'name' => 'Dien thoai iPhone 14 Pro 128GB ',
            'price' => 30490000,
        ]);
        DB::table('products')->insert([
            'code' => 'SP0005',
            'name' => 'Cap Type C - Type C 20cm Xmobile TCC04-200',
            'price' => '70000',
        ]);
        DB::table('products')->insert([
            'code' => 'SP0006',
            'name' => 'Dien thoai iPhone 13 mini 512GB',
            'price' => '21990000',
        ]);
        DB::table('products')->insert([
            'code' => 'SP0007',
            'name' => 'Adapter chuyen doi Type C - Gigabit Ethernet Belkin INC001 Đen',
            'price' => '495000',
        ]);
        DB::table('products')->insert([
            'code' => 'SP0008',
            'name' => 'Dien thoai iPhone 12 64GB',
            'price' => '16490000',
        ]);
    }
}
