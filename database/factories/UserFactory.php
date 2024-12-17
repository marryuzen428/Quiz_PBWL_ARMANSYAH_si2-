<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail,
            'user_password' => bcrypt('password'), // Password default
            'user_nama' => $this->faker->name,
            'user_alamat' => $this->faker->address,
            'user_hp' => $this->faker->phoneNumber,
            'user_pos' => $this->faker->postcode,
            'user_role' => 1,
            'user_aktif' => 1,
        ];
    }
}
