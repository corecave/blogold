<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status =  $this->faker->randomElement(['published', 'schedualed', 'draft']);
        return [
            "title" => $this->faker->sentence(),
            "slug" => $this->faker->unique()->slug,
            "featured_image" => $this->faker->imageUrl(),
            "excerpt" => $this->faker->paragraph,
            "status" => $status,
            "category_id" => Category::factory(),
            "schedualed_at" => $status == 'schedualed' ? now()->addDays(7) : null,
            "content" => $this->faker->text,
        ];
    }
}
