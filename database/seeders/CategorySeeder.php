<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $categories = array('falda','pantalon','tanga','chaqueta','camiseta','bolso','bufanda','calcetines','vestido','blusa','abrigo','calzoncillo');

        // foreach ($categories as $category) {
        //     Category::factory()->count(1)->create(['name' => $category]);
        // }

        DB::table('categories')->insert([
                ['id' => 1, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Tops'],
                ['id' => 2, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Bottoms'],
                ['id' => 3, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Dresses'],
                ['id' => 4, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Jackets'],
                ['id' => 5, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Accesories'],
                ['id' => 6, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Bags'],
                ['id' => 7, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Shoes'],
                // ['id' => 8, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'),'name' => 'calcetines'],
                // ['id' => 9, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'),'name' => 'vestido'],
                // ['id' => 10, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'),'name' => 'blusa'],
                // ['id' => 11, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'),'name' => 'abrigo'],
                // ['id' => 12, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'),'name' => 'calzoncillo'],
                // ['id' => 13, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'),'name' => 'top'],
                // ['id' => 14, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'),'name' => 'sujetador'],
                // ['id' => 15, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'),'name' => 'corpiño'],
                // ['id' => 16, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'),'name' => 'corset'],
                // ['id' => 17, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'),'name' => 'pañuelo'],
                // ['id' => 18, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'),'name' => 'mangas'],
                // ['id' => 19, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'),'name' => 'boots'],
                // ['id' => 20, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'),'name' => 'tacones'],
                // ['id' => 21, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'),'name' => 'bikini'],
                // ['id' => 22, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'),'name' => 'body'],
        ]);
    }
}
