<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Attendance;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceFactory extends Factory
{
    protected $model = Attendance::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $userIds = User::pluck('id');
        return [
            'atendance_id' => $this->faker->randomElement($userIds),
            'break_start_time' => $this->faker->time(),
            'break_end_time' => $this->faker->time()
        ];
    }
}
