<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = $this->faker;
        $start_date = $faker->dateTime();
        return [
            'name' => $faker->text(20),
            'character_code' => $faker->text(5),
            'content' => $faker->text(50),
            'date_creation' => $start_date,
            'author' => $faker->name()
        ];
    }
}

