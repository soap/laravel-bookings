<?php

namespace App\Jongman\Interfaces;

interface DailyLayoutFactoryInterface
{
    public function create(ReservationListingInterface $listing, ScheduleLayoutInterface $layout);
}
