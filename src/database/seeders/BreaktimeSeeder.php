<?php

namespace Database\Seeders;

use App\Models\Breaktime;
use Illuminate\Database\Seeder;

class BreaktimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Breaktime::factory()->count(10)->create();
    }
}
