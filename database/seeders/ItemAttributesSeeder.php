<?php

namespace Database\Seeders;

use App\Models\ItemAttributes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class ItemAttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_attributes')->insert([
            ['id' => 1, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 35.00, 'available' => 1, 'size' => 'XS/38/8', 'item_id' => 1,],
            ['id' => 2, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 55.00, 'available' => 1, 'size' => 'L/40/12', 'item_id' => 2,],
            ['id' => 3, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 40.00, 'available' => 1, 'size' => 'M/38/10', 'item_id' => 3,],
            ['id' => 4, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 30.00, 'available' => 1, 'size' => 'S/36/8', 'item_id' => 4,],
            ['id' => 5, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 55.00, 'available' => 1, 'size' => 'S/36/8', 'item_id' => 5,],
            ['id' => 6, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 35.00, 'available' => 1, 'size' => 'S/36/8', 'item_id' => 6,],
            // ['id' => 7, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 55.00, 'available' => 1, 'size' => 'S/36/8', 'item_id' => 7,],
            ['id' => 8, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 120.00, 'available' => 1, 'size' => 'M/38/10', 'item_id' => 8,],
            ['id' => 9, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 45.00, 'available' => 1, 'size' => 'S/36/8', 'item_id' => 9,],
            ['id' => 10, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 35.00, 'available' => 1, 'size' => 'XL/42/14', 'item_id' => 10,],

            ['id' => 11, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 25.00, 'available' => 1, 'size' => 'S/36/8', 'item_id' => 11,],
            ['id' => 12, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 60.00, 'available' => 1, 'size' => '80B', 'item_id' => 12,],
            ['id' => 13, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 25.00, 'available' => 1, 'size' => 'S/36/8', 'item_id' => 13,],
            ['id' => 14, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 25.00, 'available' => 1, 'size' => 'S/36/8', 'item_id' => 14,],
            ['id' => 15, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 180.00, 'available' => 1, 'size' => '80B', 'item_id' => 15,],
            ['id' => 16, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 110.00, 'available' => 1, 'size' => 'S/36/8', 'item_id' => 16,],
            ['id' => 17, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 100.00, 'available' => 1, 'size' => 'L/40/12', 'item_id' => 17,],
            ['id' => 18, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 45.00, 'available' => 1, 'size' => 'S/36/8', 'item_id' => 18,],

            ['id' => 19, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 40.00, 'available' => 1, 'size' => 'M/38/10', 'item_id' => 19,],
            ['id' => 20, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 45.00, 'available' => 1, 'size' => 'XS/34/6', 'item_id' => 20,],
            ['id' => 21, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 45.00, 'available' => 1, 'size' => 'XS/34/6', 'item_id' => 21,],
            ['id' => 22, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 40.00, 'available' => 1, 'size' => 'M/38/10', 'item_id' => 22,],
            ['id' => 23, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 50.00, 'available' => 1, 'size' => 'M/38/10', 'item_id' => 23,],

        ]);
        // $itemAttributes = ItemAttributes::factory()->count(30)->create();
    }
}
