<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Support\Facades\DB;


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
        
        $items = Item::factory()->count(30)->create();
    }
}
