<?php

namespace Database\Seeders;

use App\Models\ItemAttributes;
use Illuminate\Database\Seeder;

class ItemAttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $itemAttributes = ItemAttributes::factory()->count(30)->create();
    }
}
