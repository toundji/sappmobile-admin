<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Publication;

class PublicationFactory extends Factory
{
    protected $model = Publication::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'link' => $this->faker->url,
            'image' => "storage/publication_images/206256879.jpg",
            'images' =>"storage/publication_images/206256879.jpg, storage/publication_images/206256879.jpg, storage/publication_images/206256879.jpg",
            'description' => $this->faker->paragraph(1),
        ];
    }
}
