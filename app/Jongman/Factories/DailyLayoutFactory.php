<?php

namespace App\Jongman\Factories;

use App\Jongman\Application\Schedule\DailyLayout;
use App\Jongman\Interfaces\DailyLayoutFactoryInterface;
use App\Jongman\Interfaces\ReservationListingInterface;
use App\Jongman\Interfaces\ScheduleLayoutInterface;

class DailyLayoutFactory implements DailyLayoutFactoryInterface
{
    public function create(ReservationListingInterface $listing, ScheduleLayoutInterface $layout)
    {
        return new DailyLayout($listing, $layout);
    }
}
