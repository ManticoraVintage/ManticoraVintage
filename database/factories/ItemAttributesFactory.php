<?php

namespace Database\Factories;

use App\Models\ItemAttributes;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemAttributesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ItemAttributes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price' => $this->faker->numberBetween(1,100),
            'units_in_stock' => $this->faker->numberBetween(1,100),
            'size' => 'M',
            'item_id' => $this->faker->numberBetween(1, 30),
        ];
    }
}
