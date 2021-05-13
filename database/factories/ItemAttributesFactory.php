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
        $strings = array(
            'Red',
            'Blue',
        );
        $key = array_rand($strings);
        echo $strings[$key];
        return [
            'price' => $this->faker->numberBetween(1,100),
            'available' => random_int(0, 1),
            'size' => 'M',
            'gender' => 'M',
            'item_id' => $this->faker->numberBetween(1, 30),
        ];
    }
}
