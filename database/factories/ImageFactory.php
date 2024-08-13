<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    protected $model = Image::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imageUrl = 'https://randomuser.me/api/portraits/women/' . fake()->numberBetween(1, 99) . '.jpg';
        $url = fake()->randomElement(['storage/images/human.png']);
        Storage::put($url, file_get_contents($imageUrl));
        return [
            'url' => $url,

        ];
    }
}
