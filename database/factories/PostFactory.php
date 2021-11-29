<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\PseudoTypes\LowercaseString;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->title = $this->faker->sentence(mt_rand(2, 8));
        // $this->body = '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(6, 11))) . '</p>';
        $this->body = collect($this->faker->paragraphs(mt_rand(6, 11)))->map(function ($p) {
            return "<p>$p</p>";
        })
            ->implode('');
        return [
            'title' => $this->title,
            'slug' => strtolower(str_replace(' ', '-', $this->title)),
            'excerpt' => Str::limit($this->body, 60, '...'),
            'body' => $this->body,
            'user_id' => mt_rand(1, 5),
            'category_id' => mt_rand(1, 3)
        ];
    }
}
