<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'user_name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'password' => $this->faker->password()
        ];
    }
}
