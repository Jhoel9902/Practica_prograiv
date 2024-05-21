<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Fungus;

class FungusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Fungus::class;
    public function definition()
    {
        return [
            //
            'Nombre' => $this->faker->name(),
            'Descripcion' => $this->faker->sentence(),
            'Pileo' => $this->faker->randomElement(['Acampanado', 'Convexo', 'Umbonado/Mamelonado', 'Plano', 'Deprimido', 'Globoso']),
            'Lamela' => $this->faker->randomElement(['Distante', 'Libre', 'Anexa', 'Adherentes', 'Decurrentes', 'Simulado', 'Marginadas']),
            'Forma_del_pie' => $this->faker->randomElement(['Cilindrico', 'Radicante', 'Bulboso', 'Con volva', 'Fusoide']),
        ];
    }
}
