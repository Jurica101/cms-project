<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Setting;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Setting::class;

    public function definition()
    {
        return [
            'about_first_text' => fake()->paragraph(),
            'about_second_text' => fake()->paragraph(),
            'about_first_image' => 'setting/about-img-1.jpg',
            'about_second_image' => 'setting/about-img-2.jpg',
            'about_our_vision' => fake()->paragraph(),
            'about_our_mission' => fake()->paragraph(),
            'about_services' => fake()->paragraph(),
        ];
    }
}
