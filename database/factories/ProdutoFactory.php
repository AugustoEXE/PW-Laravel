<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $names = [
            'Laranja',
            'Noz',
            'Bolo',
            'Caranguejo',
            'Morango',
            'Lentilhas',
            'Manga',
            'Trigo',
            'Queijo',
            'Vegetais',
            'Damasco',
            'Abobrinha',
            'Cenoura',
            'Groselha',
            'Rabanete',
            'Granada',
        ];


        $faker = $this->faker;
        return [
            'name' => $faker->randomElement($names),
            'price' => $faker->randomFloat(2, 1, 1000000),
            'quantity' => $faker->numberBetween(1, 10000),
        ];
    }
}
