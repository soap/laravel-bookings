<?php

namespace Database\Seeders;

use App\Models\ScheduleLayout;
use Illuminate\Database\Seeder;

class ScheduleLayoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ScheduleLayout::create([
            'name' => 'Default',
            'timezone' => 'UTC',
        ]);
    }
}
