<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Annonce;

class AnnonceFactory extends Factory
{

    protected $model = Annonce::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'image' => "storage/annonce_images/206256879.jpg",
            'images' =>"storage/annonce_images/206256879.jpg, storage/annonce_images/206256879.jpg, storage/annonce_images/206256879.jpg",
            'description' => $this->faker->paragraph(1),
        ];
    }
}
