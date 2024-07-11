<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeBlock extends Model
{
    use HasFactory;

    protected $fillable = [
        'day_of_week',
        'start_time',
        'end_time',
        'availability_code',
        'label',
        'end_label',
    ];

    public function scheduleLayout()
    {
        return $this->belongsTo(ScheduleLayout::class);
    }
}
