<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schedule::create([
            'name' => 'Default',
            'weekday_start' => 1,
            'visible_days' => 5,
            'schedule_layout_id' => 1,
        ]);
    }
}
