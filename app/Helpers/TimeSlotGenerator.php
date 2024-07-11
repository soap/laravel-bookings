<?php

namespace App\Helpers;

use Carbon\CarbonInterval;

class TimeSlotGenerator
{
    protected $interval;

    public function __construct($timeIn = '08:00', $timeOut = '17:00', int $minutes = 60)
    {
        $this->interval = CarbonInterval::minutes($minutes)
            ->toPeriod($timeIn, $timeOut);
    }

    public function get()
    {
        return $this->interval;
    }

    public function toArray($format = 'H:i')
    {
        $output = [];
        foreach ($this->interval as $slot) {
            $output[] = $slot->format($format);
        }

        return $output;
    }

    public function toOptions($format = 'H:i')
    {
        $timeSlots = [];
        foreach ($this->interval as $time) {
            $formattedTime = $time->format('H:i');
            $timeSlots[] = [
                'id' => $formattedTime,
                'name' => $formattedTime,
            ];
        }

        return $timeSlots;
    }
}
