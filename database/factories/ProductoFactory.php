<?php

namespace Database\Factories;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    public function definition()
    {
        $almacenesIds = Almacen::pluck('id')->toArray();
        $categoriasIds = Categoria::pluck('id')->toArray();

        return [
            'nombre' => $this->faker->word,
            'precio' => $this->faker->randomFloat(2, 1, 1000),
            'observaciones' => $this->faker->paragraph,
            'categoria_id' => $this->faker->randomElement($categoriasIds),
            'almacen_id' =>  $this->faker->randomElement($almacenesIds)
            
        ];
    }
}
