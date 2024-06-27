<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'tag' => $this->faker->randomElement(['New', 'Featured', 'Sale']), // Chọn ngẫu nhiên một trong các tag
            'imgSrc' => $this->faker->imageUrl(), // Sinh một URL hình ảnh ngẫu nhiên
            'title' => $this->faker->sentence(6, true), // Sinh một câu có 6 từ ngẫu nhiên
            'name' => $this->faker->words(3, true), // Sinh một chuỗi từ 3 từ ngẫu nhiên
            'price' => $this->faker->numberBetween(1000, 100000), // Sinh một số ngẫu nhiên từ 1,000 đến 100,000
            'sizes' => json_encode($this->faker->randomElements(['US 6', 'US 7', 'US 8', 'US 9'], 3)), // Chọn ngẫu nhiên 3 kích cỡ và lưu vào dạng JSON
        ];
    }
}
