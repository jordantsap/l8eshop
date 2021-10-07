<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'active' => 1,
            'featured' => rand(0,1),
            'quantity' => rand(0,10),
            'homepage' => rand(0,1),
            'slider' => 1,
            'sku' => '',
            'logo' => 'random.jpg',
            'image1' => 'random.jpg',
            'image2' => 'random.jpg',
            'image3' => 'random.jpg',
            'image4' => 'random.jpg',
            'image5' => 'random.jpg',
            'category_id' => rand(1, 4),
            'type_id' => rand(1, 4),
            'sub_type_id' => rand(1, 4),
            'color_id' => rand(1, 4),
            'user_id' => 4,
            'brand_id' => rand(1,4),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->biasedNumberBetween($min = 1, $max = 20000),
        ];
    }
}
