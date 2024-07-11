<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'weekday_start',
        'visible_days',
    ];

    public function scheduleLayout()
    {
        return $this->belongsTo(ScheduleLayout::class, 'schedule_layout_id');
    }

    public function resources()
    {
        return $this->hasMany(Resource::class);
    }
}
