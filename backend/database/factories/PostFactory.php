<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\models\Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      return [
          'title' => $this->faker->title,
          'meaning' => $this->faker->word,
          'example' => $this->faker->sentence,
          'synonyms' => $this->faker->word,
          'antonyms' => $this->faker->word,
          'note' => $this->faker->paragraph,
          'created_at' => now(),
      ];
    }
}
