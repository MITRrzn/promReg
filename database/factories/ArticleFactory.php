<?php

namespace Database\Factories;

use App\Models\article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'article_title'=>$this->faker->paragraph(2),
            'article_description'=>$this->faker->text(1000),
            'article_image'=>$this->faker->imageUrl(640, 480, 'business', true),
            'categories_id'=>$this->faker->numberBetween(1,7)
        ];
    }
}
