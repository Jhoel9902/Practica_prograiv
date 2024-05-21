<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fungus;

class FungusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Fungus::create([
            'Nombre' => 'Amanita Muscaria',
            'Descripcion' => 'El Amanita muscaria es un hongo basidiomiceto de gran belleza y notoriedad. Su sombrero, de forma característica de paraguas, puede tener un diámetro de entre 8 y 20 centímetros. Varía en color desde el rojo brillante al naranja, ocasionalmente con manchas blancas. Tiene numerosas láminas blancas y libres, y un tallo blanco, a menudo con un anillo blanco en su parte superior. El hongo es conocido por su asociación con cuentos populares y mitología, y se encuentra en bosques de coníferas y de hoja caduca en todo el mundo.

            Toxicidad:
            El Amanita muscaria es considerado como un hongo tóxico, aunque su toxicidad varía y puede ser alucinógeno en ciertas dosis. Contiene varias toxinas, incluyendo ácido iboténico y muscimol, que pueden causar síntomas como vómitos, diarrea, alucinaciones y en casos severos, daño hepático y renal. Es importante recordar que este hongo no debe ser consumido sin la supervisión de un experto en micología, ya que su ingesta puede ser peligrosa.
            
            Distribución:
            El Amanita muscaria se encuentra distribuido en regiones templadas y boreales de todo el mundo, preferentemente asociado con árboles de coníferas como pinos y abetos, así como con árboles de hoja caduca como robles y hayas.',
            'Pileo' => ('Convexo'),
            'Lamela' => ('Libre'),
            'Forma_del_pie' => ('Con volva')
        ]);
    }
}
