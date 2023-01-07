<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Faq;


class FaqFactory extends Factory
{
    protected $model = Faq::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quiz' => $this->faker->sentence."?",
            'response' => $this->faker->paragraph(1),
            'status' => "1"
        ];
    }
}
