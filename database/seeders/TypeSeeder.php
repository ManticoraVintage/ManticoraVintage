<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zozobraDescription = "Zozobra marks the beginning of her values with thongs. A fetishized product and always linked to the feminine. The idea is to approach it from a point of view that does not encompass gender and that focuses on the body. And thus turn this garment into a liberating product that is provocative and fun. From the classic thong to our own double strap design thong, perfect for showing it off wherever you go. We created the same design but with two variations, one for the penis and the other for the vagina. And at the same time we offer the possibility of superimposing the two designs (the single thong + the double strap) giving the opportunity to experiment with shapes and create different variations to suit each individual's taste. In addition to offering a range of colors that promises to grow and grow, the same brand also promises to grow and evolve with new designs and garments with the same values as thongs.";
        $vintageDescription = "The two thousand have always been criticized in the fashion world for their risky combinations and bizarre outfits; low-rise pants, mini-skirts, bright colors ... Manticora.Vntg aims to bring back that cheeky and provocative essence, giving value to all those clothing brands with their own style that were devoured by multinationals. Miss Sixty, Morgan de toi, Lois, Baby Phat ... Brands that today have lost all they were to lose themselves in a commercial and decaf style. Our task is to find those unique pieces that marked a decade, which most of them manufactured in their countries of origin (and not in countries where mass production or exploitation predominates). In addition, Manticora.vntg also offers a selection of brands from great designers that were everything in the two thousand.Manticora is committed to experimenting and leaving aside the stigmas created by clothing divided by genres and that each one risks and causes as they please.";
        
        DB::table('types')->insert([
            ['id' => 1, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Manticora vintage', 'description' => $vintageDescription],
            ['id' => 2, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Manticora selected', 'description' => ''],
            ['id' => 3, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Zozobra', 'description' => $zozobraDescription],
        ]);
    }
}
