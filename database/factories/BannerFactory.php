<?php

namespace Database\Factories;

use App\Banner;
use Illuminate\Database\Eloquent\Factories\Factory;

class BannerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Banner::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'       => $this->faker->words(3, true),
            'description' => $this->faker->text(30),
            'order'       => $this->faker->randomNumber(1),
            'image'       => $this->faker->imageUrl,
            'created_at'  => $this->faker->date('Y-m-d H:i:s'),
            'updated_at'  => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
