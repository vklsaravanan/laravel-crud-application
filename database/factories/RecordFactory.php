<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Record;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RecordFactory extends Factory
{
    protected $model = Record::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *
     */
    public function definition(): array
    {
        return [
            "user_id"=>1,
            "title"=>$this->faker->sentence,
            "description"=>$this->faker->paragraph,
            "category_id"=>$this->faker->numberBetween(1,3),
            "status"=>$this->faker->boolean(50)
        ];
    }
}
