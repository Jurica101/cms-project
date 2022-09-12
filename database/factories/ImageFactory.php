<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Image;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Image::class;

    public function definition()
    {
        $fake_images = [
            '1.jpg',
            '2.jpg',
            '3.jpeg',
            '4.jpg',
            '5.jpg',
            '6.jpg',
            '7.png',
            '8.jpg',
            '9.jpg',
            '10.jpg',
        ];

        return [
            'name' => fake()->word(),
            'extension' => 'jpg',
            'path' => 'images/' . fake()->randomElement($fake_images)
        ];
    }
}
