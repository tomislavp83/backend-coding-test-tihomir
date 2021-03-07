<?php

namespace Database\Factories;

use App\Models\Casino;
use App\Models\Faq;
use Illuminate\Database\Eloquent\Factories\Factory;

class FaqFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Faq::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'casino_id' => Casino::factory(),
            'question' => $this->faker->sentence() . '?',
            'answer' => $this->faker->paragraph()
        ];
    }
}
