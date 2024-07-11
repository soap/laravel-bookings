<?php

namespace App\Jongman\Interfaces;

use App\Jongman\Common\Date;

interface DailyLayoutInterface
{
    /**
     * @param  int  $resourceId
     * @return array|IReservationSlot[]
     */
    public function getLayout(Date $date, $resourceId);

    /**
     * @return bool
     */
    public function isDateReservable(Date $date);

    /**
     * @return string[]
     */
    public function GetLabels(Date $displayDate);

    /**
     * @return SchedulePeriod[]
     */
    public function getPeriods(Date $displayDate);

    /**
     * @param  int  $resourceId
     * @return DailyReservationSummary
     */
    public function getSummary(Date $date, $resourceId);

    /**
     * @return string
     */
    public function timezone();
}
