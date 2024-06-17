<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 100),  // Giả sử bạn có 100 người dùng
            'product_id' => $this->faker->numberBetween(1, 50), // Giả sử bạn có 50 sản phẩm
            'rating' => $this->faker->numberBetween(1, 5),  // Điểm đánh giá từ 1 đến 5
            'content' => $this->faker->paragraph(),  // Một đoạn văn ngẫu nhiên
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
