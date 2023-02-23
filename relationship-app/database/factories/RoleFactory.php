<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $array = ['admid','hr','student','cleark','ceo','developer','ba','sr developer','jr developer' ,'trainer','team leader','project manager'];
        return [
            'name' => fake()->randomElement($array),
        ];
    }
}
