<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = News::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    $title = $this->faker->text(20);
    $slug = Str::slug($title);
    return [
      'title' => $title,
      'description' => $this->faker->text(),
      'author' => $this->faker->name(),
      'slug' => $slug,
      'category_id' => rand(1, 10)
    ];
  }
}
