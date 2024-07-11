<?php

namespace App\Jongman\Interfaces;

use App\Jongman\Common\Date;
use App\Jongman\Interfaces\DailyScheduleLayoutInterface;
use App\Jongman\Interfaces\LayoutTimezoneInterface;

interface ScheduleLayoutInterface extends LayoutTimezoneInterface, DailyScheduleLayoutInterface
    {
        /**
         * @param Date $layoutDate
         * @param bool $hideBlockedPeriods
         * @return SchedulePeriod[]|array of SchedulePeriod objects
         */
        public function getLayout(Date $layoutDate, $hideBlockedPeriods = false);
    
        /**
         * @param Date $date
         * @return SchedulePeriod|null period which occurs at this datetime. Includes start time, excludes end time. null if no match is found
         */
        public function getPeriod(Date $date);
    
        /**
         * @param Date $startDate
         * @param Date $endDate
         * @return SlotCount
         */
        public function getSlotCount(Date $startDate, Date $endDate);
    
        /**
         * @param PeakTimes $peakTimes
         */
        //public function ChangePeakTimes(PeakTimes $peakTimes);
    
        //public function RemovePeakTimes();
    
        /**
         * @return bool
         */
        public function fitsToHours();
    
        /**
         * @return bool
         */
        //public function UsesCustomLayout();
    }