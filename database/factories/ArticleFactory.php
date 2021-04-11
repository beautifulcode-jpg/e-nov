<?php
namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        return [
            'title' => $this->faker->sentence(6),
            'body' => $this->faker->paragraph(10),
            'category' => $this->faker->randomElement(['informatique','robotique','intelligence-artificielle','internet-des-objets']),
            'featured' => '0',
            'author_id' => rand(1,10),
            'slug' => $this->faker->slug,
            'pathtoimage' => "https://lye-nov.sirv.com/Nature/nature".rand(1,10).".jpg"
            
        ];
    }
}