<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = array('Selected','TangasCompany','Standard');
        
        foreach($types as $type) {
            Type::factory()->count(1)->create(['name' => $type]);
        }
    }
}
