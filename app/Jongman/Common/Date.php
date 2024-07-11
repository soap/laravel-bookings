<?php

namespace App\Jongman\Common;

use Carbon\Carbon;

class Date extends Carbon
{
    public function getDate()
    {
        return $this->copy()->setTime(0, 0, 0);
    }

    public function getTime()
    {
        return new Time($this->hour, $this->minute, $this->second, $this->timezone);
    }

    public function toTimezone($timezone)
    {
        return $this->copy()->setTimezone($timezone);
    }

    public function compareTimes(Time $time): int
    {
        return $this->getTime()->compare($time);
    }

    public function toDatabase()
    {
        return $this->utc()->format('Y-m-d H:i:s');
    }

    public function fromDatabase($value)
    {
        return $this->parse($value)->setTimezone('UTC');
    }

    /**
     * Compare this date with passed in date
     * Returns:
     * 1 if this date is greater than passed in date
     * -1 if this date is less than passed in date
     * 0 if this date is equal to passed in date
     */
    public function compare(Date $date): int
    {
        if ($this->gt($date)) {
            return 1;
        }

        if ($this->lt($date)) {
            return -1;
        }

        return 0;
    }

    /**
     * @param  bool  $isEndTime
     * @return Date
     */
    public function setTimeFromTimeObject(Time $time, $isEndTime = false)
    {
        $date = Date::create(
            $this->year,
            $this->month,
            $this->day,
            $time->hour(),
            $time->minute(),
            $time->second(),
            $this->timezone
        );

        if ($isEndTime) {
            if ($time->hour() == 0 && $time->minute() == 0 && $time->second() == 0) {
                return $date->addDays(1);
            }
        }

        return $date;
    }

    /**
     * @return DateDiff
     */
    public function getDifference(Date $date)
    {
        return DateDiff::betweenDates($this, $date);
    }

    /**
     * @static
     *
     * @return Date
     */
    public static function minDate()
    {
        return Date::parse('0001-01-01', 'UTC');
    }

    /**
     * @static
     *
     * @return Date
     */
    public static function maxDate()
    {
        return Date::parse('9999-01-01', 'UTC');
    }
}
