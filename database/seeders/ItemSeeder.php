<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // //Fill array with images URLs
        // $directory = 'manticoravintage\public\images\fake_clothes';
        // $images = glob("$directory/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
        // $startOfUrl = strpos($images[0], "/images");

        // //Reformat the URL to be correctly displayed
        // $images_formatted_url = array_map(function ($image) use ($startOfUrl) {
        //     return substr($image, $startOfUrl, strlen($image));
        // }, $images);

        // Item::factory()->count(1)->create(['photo' => $images_formatted_url[array_rand($images_formatted_url)]]); 



        DB::table('items')->insert([

            ['id' => 1, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Miss sixty low waisted jeans', 'photo' => "05,05b", 'quality' => 4, 'country' => 'China', 'category_id' => 2, 'type_id' => 1],
            ['id' => 2, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Miss sixty low waisted embroided jeans', 'photo' => "01,01b", 'quality' => 4, 'country' => 'China', 'category_id' => 2, 'type_id' => 1],
            ['id' => 3, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Miss sixty pink extra low waisted corduroy Pants', 'photo' => "02,02b", 'quality' => 4, 'country' => 'China', 'category_id' => 2, 'type_id' => 1],
            ['id' => 4, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Miss sixty pink low waisted jeans', 'photo' => "03,03b", 'quality' => 4, 'country' => 'China', 'category_id' => 2, 'type_id' => 1],
            ['id' => 5, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Miss sixty camel hinda style pants', 'photo' => "04,04b", 'quality' => 5, 'country' => 'China', 'category_id' => 2, 'type_id' => 1],
            ['id' => 6, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Miss Sixty  sheer black pants', 'photo' => "06,06b", 'quality' => 4, 'country' => 'China', 'category_id' => 2, 'type_id' => 1],
            // ['id' => 7, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Miss sixty camel hinda style pants', 'photo' => "04,04b", 'quality' => 5, 'country' => 'China', 'category_id' => 2, 'type_id' => 1],
            ['id' => 8, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Cavalli chettah printed low waisted jeans', 'photo' => "08,08b", 'quality' => 5, 'country' => 'China', 'category_id' => 2, 'type_id' => 2],
            ['id' => 9, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Miss sixty camel flared jeans', 'photo' => "09,09b", 'quality' => 4, 'country' => 'China', 'category_id' => 2, 'type_id' => 1],
            ['id' => 10, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Miss sixty low waisted green pants', 'photo' => "10,10b", 'quality' => 4, 'country' => 'China', 'category_id' => 2, 'type_id' => 1],
            ['id' => 11, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Pussy deluxe strapless top', 'photo' => "11,11b", 'quality' => 4, 'country' => 'China', 'category_id' => 1, 'type_id' => 1],
            ['id' => 12, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'John Galliano bra', 'photo' => "12", 'quality' => 4, 'country' => 'China', 'category_id' => 14, 'type_id' => 2],
            ['id' => 13, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Baby path ruched t-shirt', 'photo' => "13,13b", 'quality' => 5, 'country' => 'China', 'category_id' => 5, 'type_id' => 1],
            ['id' => 14, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Baby path ruched strapless top', 'photo' => "14,14b", 'quality' => 4, 'country' => 'China', 'category_id' => 13, 'type_id' => 1],
            ['id' => 15, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Dolce & gabbana golden Bustier', 'photo' => "15,15b", 'quality' => 4, 'country' => 'China', 'category_id' => 15, 'type_id' => 2],
            ['id' => 16, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Dolce & gabbana D&G hot pink Top', 'photo' => "16,16b", 'quality' => 4, 'country' => 'China', 'category_id' => 13, 'type_id' => 2],
            ['id' => 17, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Versace black mini-skirt', 'photo' => "17,17b", 'quality' => 4, 'country' => 'China', 'category_id' => 1, 'type_id' => 1],
            ['id' => 18, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Anti-flirt blue Bustier', 'photo' => "18,18b", 'quality' => 5, 'country' => 'China', 'category_id' => 15, 'type_id' => 1],

            ['id' => 19, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Anti-Flirt pink top', 'photo' => "19a,19b", 'quality' => 5, 'country' => 'China', 'category_id' => 13, 'type_id' => 1],
            ['id' => 20, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Green Anti-Flirt Lace Bustier', 'photo' => "20a,20b", 'quality' => 5, 'country' => 'China', 'category_id' => 13, 'type_id' => 1],
            ['id' => 21, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Anti-flirt nude Bustier', 'photo' => "21a,21b", 'quality' => 4, 'country' => 'China', 'category_id' => 13, 'type_id' => 1],
            ['id' => 22, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Anti-flirt cheeta top with pink lace', 'photo' => "22a,22b", 'quality' => 4, 'country' => 'China', 'category_id' => 13, 'type_id' => 1],
            ['id' => 23, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Play boy strass mini skirt', 'photo' => "23a,23b", 'quality' => 4, 'country' => 'Peru', 'category_id' => 1, 'type_id' => 1],

        ]);



        // $items = Item::factory()->count(30)->create();
    }
}
