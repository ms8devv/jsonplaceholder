<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->jobTitle(),
            'body' => fake()->paragraph(3),
            'image' => 'https://media.mehrnews.com/d/2021/03/14/3/3719297.jpg' ,
            'category_id' => 9 ,
            'user_id' => 40
        ]; 
    }
}
