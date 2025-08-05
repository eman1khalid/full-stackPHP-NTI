<?php
namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraphs(3, true), // 3 فقرات نص
            'user_id' => User::inRandomOrder()->first()->id, // يختار مستخدم عشوائي
        ];
    }
}
