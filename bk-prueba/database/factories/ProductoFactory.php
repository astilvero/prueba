<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Producto;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * 
     */

    protected $model=Producto::class;

    public function definition()
    {
        return [
            //
            'name' => $this->faker->randomElement(['pantallas','celulares','mouse','teclado']),
            'status'=>$this->faker->randomElement(['1','0'])
        ];
    }
}
