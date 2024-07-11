<?php

namespace Database\Factories;

use App\Models\Attendance;
use App\Models\Breaktime;
use Illuminate\Database\Eloquent\Factories\Factory;

class BreaktimeFactory extends Factory
{
    protected $model = Breaktime::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $attendIds = Attendance::pluck('id');
        return [
            'atendance_id' => $this->faker->randomElement($attendIds),
            'break_start_time' => $this->faker->time(),
            'break_end_time' => $this->faker->time()
        ];
    }
}
