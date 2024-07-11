<?php

namespace Database\Seeders;

use App\Models\ScheduleLayout;
use Illuminate\Database\Seeder;

class TimeBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $scheduleLayout = ScheduleLayout::find(1);
        $scheduleLayout->timeBlocks()->createMany([
            [
                'availability_code' => 0,
                'start_time' => '00:00',
                'end_time' => '08:00',
            ],
            [
                'availability_code' => 1,
                'start_time' => '08:00',
                'end_time' => '08:30',
            ],
            [
                'availability_code' => 1,
                'start_time' => '08:30',
                'end_time' => '09:00',
            ],
            [
                'availability_code' => 1,
                'start_time' => '09:00',
                'end_time' => '09:30',
            ],
            [
                'availability_code' => 1,
                'start_time' => '09:30',
                'end_time' => '10:00',
            ],
            [
                'availability_code' => 1,
                'start_time' => '10:00',
                'end_time' => '10:30',
            ],
            [
                'availability_code' => 1,
                'start_time' => '10:30',
                'end_time' => '11:00',
            ],
            [
                'availability_code' => 1,
                'start_time' => '11:00',
                'end_time' => '11:30',
            ],
            [
                'availability_code' => 1,
                'start_time' => '11:30',
                'end_time' => '12:00',
            ],
            [
                'availability_code' => 1,
                'start_time' => '12:00',
                'end_time' => '12:30',
            ],
            [
                'availability_code' => 1,
                'start_time' => '12:30',
                'end_time' => '13:00',
            ],
            [
                'availability_code' => 1,
                'start_time' => '13:00',
                'end_time' => '13:30',
            ],
            [
                'availability_code' => 1,
                'start_time' => '13:30',
                'end_time' => '14:00',
            ],
            [
                'availability_code' => 1,
                'start_time' => '14:00',
                'end_time' => '14:30',
            ],
            [
                'availability_code' => 1,
                'start_time' => '14:30',
                'end_time' => '15:00',
            ],
            [
                'availability_code' => 1,
                'start_time' => '15:00',
                'end_time' => '15:30',
            ],
            [
                'availability_code' => 1,
                'start_time' => '15:30',
                'end_time' => '16:00',
            ],
            [
                'availability_code' => 1,
                'start_time' => '16:00',
                'end_time' => '16:30',
            ],
            [
                'availability_code' => 1,
                'start_time' => '16:30',
                'end_time' => '17:00',
            ],
            [
                'availability_code' => 1,
                'start_time' => '17:00',
                'end_time' => '17:30',
            ],
            [
                'availability_code' => 1,
                'start_time' => '17:30',
                'end_time' => '18:00',
            ],
            [
                'availability_code' => 0,
                'start_time' => '18:00',
                'end_time' => '00:00',
            ],
        ]);
    }
}
