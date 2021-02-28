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
            'name' => $this->faker->title,
            'price' => $this->faker->numberBetween(1,100),
            'units_in_stock' => $this->faker->numberBetween(1,100),
            'photo' => 'overridden',
            'category_id' => $this->faker->numberBetween(1,12),
            'type_id' => $this->faker->numberBetween(1,3),
        ];
    }
}
