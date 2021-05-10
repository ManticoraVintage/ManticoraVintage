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
            ['id' => 24, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 40.00, 'available' => 1, 'size' => 'Unknow', 'item_id' => 24,],
            ['id' => 25, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 55.00, 'available' => 1, 'size' => 'M/38/10', 'item_id' => 25,],
            ['id' => 26, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 45.00, 'available' => 1, 'size' => 'M/38/10', 'item_id' => 26,],
            ['id' => 27, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 85.00, 'available' => 1, 'size' => 'M/36/8', 'item_id' => 27,],
            ['id' => 28, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 115.00, 'available' => 1, 'size' => 'M/38/10', 'item_id' => 28,],
            ['id' => 29, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 95.00, 'available' => 1, 'size' => 'S/36/8', 'item_id' => 29,],
            ['id' => 30, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 25.00, 'available' => 1, 'size' => 'M/38/10', 'item_id' => 30,],
            ['id' => 31, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 60.00, 'available' => 1, 'size' => 'Unknow', 'item_id' => 31,],
            ['id' => 32, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 140.00, 'available' => 1, 'size' => 'L/40/12', 'item_id' => 32,],
            ['id' => 33, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 35.00, 'available' => 1, 'size' => 'L/40/12', 'item_id' => 33,],
            ['id' => 34, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 60.00, 'available' => 1, 'size' => 'S/36/8', 'item_id' => 34,],
            ['id' => 35, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 35.00, 'available' => 1, 'size' => 'S/36/8', 'item_id' => 35,],
            ['id' => 36, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 30.00, 'available' => 1, 'size' => 'L/40/12', 'item_id' => 36,],
            ['id' => 37, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 45.00, 'available' => 1, 'size' => 'M/38/10', 'item_id' => 37,],
            ['id' => 38, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 55.00, 'available' => 1, 'size' => 'M/38/10', 'item_id' => 38,],
            ['id' => 39, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 70.00, 'available' => 1, 'size' => 'L/40/12', 'item_id' => 39,],
            ['id' => 40, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 30.00, 'available' => 1, 'size' => 'M/38/10', 'item_id' => 40,],
            ['id' => 41, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 20.00, 'available' => 1, 'size' => 'No Size', 'item_id' => 41,],
            ['id' => 42, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 30.00, 'available' => 1, 'size' => 'No Size', 'item_id' => 42,],
            ['id' => 43, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 00.00, 'available' => 1, 'size' => 'Unknow', 'item_id' => 43,],
            ['id' => 44, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 35.00, 'available' => 1, 'size' => 'S/36/8', 'item_id' => 44,],
            // ['id' => 45, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 50.00, 'available' => 1, 'size' => 'M/38/10', 'item_id' => 45,],
            ['id' => 46, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 35.00, 'available' => 1, 'size' => 'No Size', 'item_id' => 46,],
            ['id' => 47, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 40.00, 'available' => 1, 'size' => 'No Size', 'item_id' => 47,],
            ['id' => 48, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 25.00, 'available' => 1, 'size' => 'No Size', 'item_id' => 48,],
            ['id' => 49, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 40.00, 'available' => 1, 'size' => 'No Size', 'item_id' => 49,],
            ['id' => 50, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 55.00, 'available' => 1, 'size' => 'No Size', 'item_id' => 50,],
            ['id' => 51, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 85.00, 'available' => 1, 'size' => 'No Size', 'item_id' => 51,],
            ['id' => 52, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 70.00, 'available' => 1, 'size' => 'No Size', 'item_id' => 52,],
            ['id' => 53, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 40.00, 'available' => 0, 'size' => 'No Size', 'item_id' => 53,],
            ['id' => 54, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 70.00, 'available' => 1, 'size' => 'No Size', 'item_id' => 54,],
            ['id' => 55, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 120.00, 'available' => 1, 'size' => 'No Size', 'item_id' => 55,],
            ['id' => 56, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 75.00, 'available' => 1, 'size' => 'M/38/10', 'item_id' => 56,],
            ['id' => 57, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 45.00, 'available' => 1, 'size' => 'XS/34/6', 'item_id' => 57,],
            ['id' => 58, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 40.00, 'available' => 1, 'size' => 'No Size', 'item_id' => 58,],
            ['id' => 59, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 45.00, 'available' => 1, 'size' => 'S/36/8', 'item_id' => 59,],
            ['id' => 60, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 30.00, 'available' => 1, 'size' => 'No Size', 'item_id' => 60,],
            ['id' => 61, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 40.00, 'available' => 1, 'size' => 'No Size', 'item_id' => 61,],
            ['id' => 62, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 70.00, 'available' => 1, 'size' => 'No Size', 'item_id' => 62,],
            ['id' => 63, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 40.00, 'available' => 1, 'size' => 'No Size', 'item_id' => 63,],
            ['id' => 64, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 40.00, 'available' => 1, 'size' => 'No Size', 'item_id' => 64,],
            ['id' => 65, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 40.00, 'available' => 1, 'size' => 'No Size', 'item_id' => 65,],
            ['id' => 66, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 50.00, 'available' => 1, 'size' => 'No Size', 'item_id' => 66,],
            ['id' => 67, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 40.00, 'available' => 0, 'size' => 'No Size', 'item_id' => 67,],
            ['id' => 68, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 30.00, 'available' => 1, 'size' => 'No Size', 'item_id' => 68,],
            ['id' => 69, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'price' => 40.00, 'available' => 1, 'size' => 'No Size', 'item_id' => 69,],           
        ]);
        // $itemAttributes = ItemAttributes::factory()->count(30)->create();
    }
}
