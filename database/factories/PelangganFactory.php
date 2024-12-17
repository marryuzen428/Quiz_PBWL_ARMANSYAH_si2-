<?php

namespace Database\Factories;

use App\Models\Pelanggan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PelangganFactory extends Factory
{
    protected $model = Pelanggan::class;

    public function definition()
    {
        return [
            'pel_nama' => $this->faker->name,       // Nama pelanggan
            'pel_alamat' => $this->faker->address,  // Alamat pelanggan
        ];
    }
}
