<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array('falda','pantalon','tanga','chaqueta','camiseta','bolso','bufanda','calcetines','vestido','blusa','abrigo','calzoncillo');
        
        foreach ($categories as $category) {
            Category::factory()->count(1)->create(['name' => $category]);
        }
    }
}
