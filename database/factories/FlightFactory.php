<?php

namespace Database\Factories;

use App\Models\Flight;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlightFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Flight::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
//        $dt = Carbon::tomorrow();
//        $departed = $dt;
//        $arrival_time = $dt->addHours(5);

        return [
            'name' => $this->faker->name,
            'airline' => $this->faker->sentence(5),
            'number' => $this->faker->randomNumber(5),
            'destination_id' => $this->faker->numerify(5),
            'departed' => $this->faker->dateTime(),
            'arrival_time' => $this->faker->dateTime()
        ];
    }
}


