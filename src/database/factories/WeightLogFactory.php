<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\WeightLog;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeightLogFactory extends Factory
{
    /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
    protected $model = WeightLog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'user_id' =>  User::factory(),
          'date' => $this->faker->date(),
          'weight' => $this->faker->randomFloat(1, 40, 120),
          'calories' => $this->faker->numberBetween(0, 3000),
          'exercise_time' => $this->faker->time(),
          'exercise_content' => $this->faker->sentence()
        ];
    }
}
