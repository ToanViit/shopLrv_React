<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *  
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence, // Sử dụng sentence để tạo tiêu đề giả
            'description' => $this->faker->paragraph, // Sử dụng paragraph để tạo mô tả giả
            'user_id'=> $this->faker->numberBetween(0,2)
        ];
    }
}
    