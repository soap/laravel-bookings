<?php

namespace Database\Seeders;

use App\Models\Resource;
use Illuminate\Database\Seeder;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Resource::create([
            'name' => 'Meeting Room #1',
            'description' => 'Meeting Room 1 (15 participants)',
            'min_notice_duration' => 0,
            'max_notice_duration' => 0,
            'min_booking_duration' => 30,
            'max_booking_duration' => 60,
            'schedule_id' => 1,
        ]);

        Resource::create([
            'name' => 'Meeting Room #2',
            'description' => 'Meeting Room 2 (15 participants)',
            'min_notice_duration' => 0,
            'max_notice_duration' => 0,
            'min_booking_duration' => 30,
            'max_booking_duration' => 60,
            'schedule_id' => 1,
        ]);
    }
}
