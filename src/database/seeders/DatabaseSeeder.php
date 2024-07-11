<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Attendance;
use App\Models\Breaktime;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    protected $toTruncates = [
        User::class,
        Attendance::class,
        Breaktime::class
    ];

    public function run()
    {
        Schema::disableForeignKeyConstraints();
        foreach ($this->toTruncates as $model) {
            $model::truncate();
        }

        $this->call(UserSeeder::class);
        $this->call(AttendanceSeeder::class);
        $this->call(BreaktimeSeeder::class);

        Schema::enableForeignKeyConstraints();
    }
}
