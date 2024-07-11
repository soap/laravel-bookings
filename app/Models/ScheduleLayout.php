<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleLayout extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'timezone',
    ];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function timeBlocks()
    {
        return $this->hasMany(TimeBlock::class);
    }

    public function getLayout($dayOfWeek = null)
    {
        if ($this->isUsingDailyLayouts()) {
            if ($dayOfWeek === null) {
                throw new \InvalidArgumentException('Day of week must be provided when using daily layouts');
            }

            return $this->timeBlocks->where('day_of_week', $dayOfWeek)->sortBy('start_time');
        } else {
            if ($dayOfWeek !== null) {
                throw new \InvalidArgumentException('Day of week must not be provided when not using daily layouts');
            }

            return $this->timeBlocks->sortBy('start_time');
        }

    }

    public function isUsingDailyLayouts()
    {
        return TimeBlock::where('schedule_layout_id', $this->id)->where('day_of_week', null)->count() == 0;
    }
}
