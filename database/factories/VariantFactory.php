<?php

namespace Database\Factories;

use App\Models\Variant;
use Illuminate\Database\Eloquent\Factories\Factory;

class VariantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Variant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title:el' => $this->faker->word(),
            'slug:el' => $this->faker->word(),
            'title:en' => $this->faker->word(),
            'slug:en' => $this->faker->word(),
            'category_id' => rand(1,20),
        ];
    }
}
