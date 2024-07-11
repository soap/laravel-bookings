<?php

namespace App\Jongman\Interfaces;

use App\Jongman\Interfaces\ReservationListingInterface;

interface DailyLayoutFactoryInterface
{
    public function create(ReservationListingInterface $listing, ScheduleLayoutInterface $layout);
}