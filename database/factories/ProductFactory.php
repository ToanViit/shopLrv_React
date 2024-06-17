<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {return [
        'name' => $this->faker->words(3, true), // Sinh một chuỗi từ 3 từ ngẫu nhiên
        'description' => $this->faker->paragraph, // Sinh một đoạn văn bản ngẫu nhiên
        'price' => $this->faker->numberBetween(1000, 100000), // Sinh một số ngẫu nhiên trong khoảng từ 1,000 đến 100,000
        'stock' => $this->faker->numberBetween(10, 100), // Sinh số lượng tồn kho ngẫu nhiên từ 10 đến 100
        'active' => $this->faker->boolean(80), // 80% cơ hội sẽ trả về true
    ];}
}
