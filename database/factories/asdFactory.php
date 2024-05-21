<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\asd;

class asdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = asd::class;
    public function definition()
    {
        return [
            'Descripcion' => $this->faker->sentence(),
        ];
    }
}
