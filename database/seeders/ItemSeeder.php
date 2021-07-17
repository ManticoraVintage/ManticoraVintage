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
            ['id' => 12, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'John Galliano bra', 'photo' => "12,12", 'quality' => 4, 'country' => 'China', 'category_id' => 1, 'type_id' => 2],
            ['id' => 13, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Baby path ruched t-shirt', 'photo' => "13,13b", 'quality' => 5, 'country' => 'China', 'category_id' => 5, 'type_id' => 1],
            ['id' => 14, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Baby path ruched strapless top', 'photo' => "14,14b", 'quality' => 4, 'country' => 'China', 'category_id' => 1, 'type_id' => 1],
            ['id' => 15, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Dolce & gabbana golden Bustier', 'photo' => "15,15b", 'quality' => 4, 'country' => 'China', 'category_id' => 1, 'type_id' => 2],
            ['id' => 16, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Dolce & gabbana D&G hot pink Top', 'photo' => "16,16b", 'quality' => 4, 'country' => 'China', 'category_id' => 1, 'type_id' => 2],
            ['id' => 17, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Versace black mini-skirt', 'photo' => "17,17b", 'quality' => 4, 'country' => 'China', 'category_id' => 1, 'type_id' => 1],
            ['id' => 18, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Anti-flirt blue Bustier', 'photo' => "18,18b", 'quality' => 5, 'country' => 'China', 'category_id' => 1, 'type_id' => 1],
            ['id' => 19, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Anti-Flirt pink top', 'photo' => "19a,19b", 'quality' => 5, 'country' => 'China', 'category_id' => 1, 'type_id' => 1],
            ['id' => 20, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Green Anti-Flirt Lace Bustier', 'photo' => "20a,20b", 'quality' => 5, 'country' => 'China', 'category_id' => 1, 'type_id' => 1],
            ['id' => 21, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Anti-flirt nude Bustier', 'photo' => "21a,21b", 'quality' => 4, 'country' => 'China', 'category_id' => 1, 'type_id' => 1],
            ['id' => 22, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Anti-flirt cheeta top with pink lace', 'photo' => "22a,22b", 'quality' => 4, 'country' => 'China', 'category_id' => 1, 'type_id' => 1],
            ['id' => 23, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Play boy strass mini skirt', 'photo' => "23a,23b", 'quality' => 4, 'country' => 'Peru', 'category_id' => 1, 'type_id' => 1],
            ['id' => 24, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Morgan de Toi Blue butterfly Shirt', 'photo' => "24a,24b", 'quality' => 4, 'country' => 'Greece', 'category_id' => 1, 'type_id' => 1],
            ['id' => 25, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Anti-Flirt aquamarine silk Bustier', 'photo' => "25a,25b", 'quality' => 4, 'country' => 'France', 'category_id' => 1, 'type_id' => 1],
            ['id' => 26, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Anti-Flirt navy blue Corsete', 'photo' => "26a,26b", 'quality' => 4, 'country' => 'Peru', 'category_id' => 1, 'type_id' => 1],
            ['id' => 27, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Miss Sixty Animal rare mini skirt', 'photo' => "27a,27b", 'quality' => 5, 'country' => 'Italy', 'category_id' => 1, 'type_id' => 1],
            ['id' => 28, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Vivienne Westwood x Andreas Kronthaler Sex Mesh t-shirt', 'photo' => "28a,28b", 'quality' => 4, 'country' => 'China', 'category_id' => 5, 'type_id' => 2],
            ['id' => 29, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Cavalli green elastic mesh T-shirt', 'photo' => "29a,29b", 'quality' => 4, 'country' => 'Peru', 'category_id' => 1, 'type_id' => 2],
            ['id' => 30, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Miss Sixty mini skirt.', 'photo' => "30a,30b", 'quality' => 4, 'country' => 'Italy', 'category_id' => 1, 'type_id' => 1],
            ['id' => 31, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Miss Sixty adjustable Metallic Top', 'photo' => "31a,31b", 'quality' => 3, 'country' => 'Peru', 'category_id' => 1, 'type_id' => 3],
            ['id' => 32, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Jean Paul Gaultier JPG Jeans mesh T-shirt', 'photo' => "32a,32b", 'quality' => 4, 'country' => 'Italy', 'category_id' => 1, 'type_id' => 2],
            ['id' => 33, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Miss Sixty pleated mini skirt', 'photo' => "33a,33b", 'quality' => 4, 'country' => 'Italy', 'category_id' => 1, 'type_id' => 1],
            ['id' => 34, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Versace Jeans couture Top', 'photo' => "34a,34b", 'quality' => 4, 'country' => 'Italy', 'category_id' => 1, 'type_id' => 2],
            ['id' => 35, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Lois Pink-orange butterfly top', 'photo' => "35a,35b", 'quality' => 4, 'country' => 'Spain', 'category_id' => 1, 'type_id' => 1],
            ['id' => 36, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Miss sixty pink plastic shirt', 'photo' => "36a,36b", 'quality' => 4, 'country' => 'Italy', 'category_id' => 1, 'type_id' => 1],
            ['id' => 37, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Morgan de toi sleeveless shirt', 'photo' => "37a,37b", 'quality' => 4, 'country' => 'France', 'category_id' => 1, 'type_id' => 1],
            ['id' => 38, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Black Armani mesh top', 'photo' => "38a,38b", 'quality' => 4, 'country' => 'Italy', 'category_id' => 1, 'type_id' => 2],
            ['id' => 39, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'elisabetta franchi White Bustier', 'photo' => "39a,39b", 'quality' => 4, 'country' => 'Italy', 'category_id' => 1, 'type_id' => 2,],
            ['id' => 40, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Green Escorpion T-shirt', 'photo' => "40a,40b", 'quality' => 4, 'country' => 'Spain', 'category_id' => 1, 'type_id' => 1],
            ['id' => 41, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Miss Sixty lips handkerchief', 'photo' => "41a,41b", 'quality' => 4, 'country' => 'Italy', 'category_id' => 5, 'type_id' => 1],
            ['id' => 42, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Rare Miss Sixty pink sleeves', 'photo' => "42,42", 'quality' => 4, 'country' => 'Italy', 'category_id' => 5, 'type_id' => 1],
            ['id' => 43, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Cop Copine embroidered Top', 'photo' => "43a,43b", 'quality' => 4, 'country' => 'France', 'category_id' => 1, 'type_id' => 1],
            ['id' => 44, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Lois Pink-yellow butterfly top', 'photo' => "44a,44b", 'quality' => 4, 'country' => 'Spain', 'category_id' => 1, 'type_id' => 1],
            // ['id' => 45, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Play boy strass mini skirt', 'photo' => "45a,45b", 'quality' => 4, 'country' => 'Peru', 'category_id' => 1, 'type_id' => 1],
            ['id' => 46, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Guess 00 denim bag', 'photo' => "46a,46b", 'quality' => 4, 'country' => 'China', 'category_id' => 6, 'type_id' => 1],
            ['id' => 47, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'DKNY pink baguette bag', 'photo' => "47a,47b", 'quality' => 4, 'country' => 'China', 'category_id' => 6, 'type_id' => 1],
            ['id' => 48, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Morgan de toi pink mini bag', 'photo' => "48a,48b", 'quality' => 4, 'country' => 'China', 'category_id' => 6, 'type_id' => 1],
            ['id' => 49, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => "Guess 00' pink bag", 'photo' => "49a,49b", 'quality' => 5, 'country' => 'China', 'category_id' => 6, 'type_id' => 1],
            ['id' => 50, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Just Cavalli snake print bag', 'photo' => "50a,50b", 'quality' => 5, 'country' => 'China', 'category_id' => 6, 'type_id' => 1],
            ['id' => 51, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => '2000´s Fluxa black leather + fur boots', 'photo' => "51,51", 'quality' => 4, 'country' => 'Spain', 'category_id' => 7, 'type_id' => 1],
            ['id' => 52, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => '2000´s Fluxa white leather + fur boots', 'photo' => "52,52", 'quality' => 4, 'country' => 'China', 'category_id' => 7, 'type_id' => 1],
            ['id' => 53, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Pink feathers pleasers', 'photo' => "53,53", 'quality' => 4, 'country' => 'China', 'category_id' => 7, 'type_id' => 1],
            ['id' => 54, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Rare Charles Jourdan blue mules', 'photo' => "54,54", 'quality' => 4, 'country' => 'China', 'category_id' => 7, 'type_id' => 1],
            ['id' => 55, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Rare Charles Jourdan pink mules', 'photo' => "55,55", 'quality' => 4, 'country' => 'China', 'category_id' => 7, 'type_id' => 1],
            ['id' => 56, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Cavalli pink cheeta multi psitional dress', 'photo' => "56a,56b", 'quality' => 5, 'country' => 'Italy', 'category_id' => 3, 'type_id' => 2],
            ['id' => 57, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Miss Sixty Rambow Bikini', 'photo' => "57a,57b", 'quality' => 5, 'country' => 'China', 'category_id' => 1, 'type_id' => 1],
            ['id' => 58, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'SIN DESCRIPCION', 'photo' => "58a,58b", 'quality' => 4, 'country' => 'China', 'category_id' => 6, 'type_id' => 1],
            ['id' => 59, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Miss sixty black body', 'photo' => "59a,59b", 'quality' => 4, 'country' => 'Italy', 'category_id' => 7, 'type_id' => 1],
            ['id' => 60, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => '90´s Burgundy top with devore flowers', 'photo' => "60a,60b", 'quality' => 5, 'country' => 'China', 'category_id' => 1, 'type_id' => 1],
            ['id' => 61, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'NOT IN EXCELL', 'photo' => "61a,61b", 'quality' => 4, 'country' => 'China', 'category_id' => 1, 'type_id' => 1],
            ['id' => 62, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Plein Sud fringed Maxi skirt', 'photo' => "62a,62b", 'quality' => 5, 'country' => 'France', 'category_id' => 2, 'type_id' => 1],
            ['id' => 63, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'NOT IN EXCELL', 'photo' => "63a,63b", 'quality' => 4, 'country' => 'China', 'category_id' => 6, 'type_id' => 1],
            ['id' => 64, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'NOT IN EXCELL', 'photo' => "64,64", 'quality' => 4, 'country' => 'China', 'category_id' => 6, 'type_id' => 1],
            ['id' => 65, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'NOT IN EXCELL', 'photo' => "65,65", 'quality' => 4, 'country' => 'China', 'category_id' => 6, 'type_id' => 1],
            ['id' => 66, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => "Guess 00' big pink bag", 'photo' => "66a,66b", 'quality' => 5, 'country' => 'China', 'category_id' => 6, 'type_id' => 1],
            ['id' => 67, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => '2000´s Guess pink Mini Bag', 'photo' => "67a,67b", 'quality' => 5, 'country' => 'China', 'category_id' => 6, 'type_id' => 1],
            ['id' => 68, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Miss sixty metallic pink mini bag', 'photo' => "68a,68b", 'quality' => 4, 'country' => 'China', 'category_id' => 6, 'type_id' => 1],
            ['id' => 69, 'created_at' => Carbon::create('2021', '01', '01'), 'updated_at' => Carbon::create('2021', '01', '01'), 'name' => 'Vintage fake fur cardigan', 'photo' => "69a,69b", 'quality' => 4, 'country' => 'China', 'category_id' => 7, 'type_id' => 1],
           
        ]);
    }
}
