<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'author' => $this->faker->name(),
            'release_date' => date('Y-m-d'),
            'added_by_user_id' => User::all()->random()->id,
        ];
    }
}
