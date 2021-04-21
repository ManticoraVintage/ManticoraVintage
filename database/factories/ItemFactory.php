<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Item;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->realText($maxNbChars = 20, $indexSize = 2),
            'quality' => $this->faker->numberBetween(1, 5),
            'country' => 'China',
            'photo' => 'overridden',
            'category_id' => $this->faker->numberBetween(1, 12),
            'type_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
