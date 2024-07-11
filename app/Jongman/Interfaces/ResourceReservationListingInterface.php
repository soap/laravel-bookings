<?php

namespace App\Jongman\Interfaces;

interface ResourceReservationListingInterface
{
    /**
     * @return int
     */
    public function count();

    /**
     * @return array|ReservationListItem[]
     */
    public function reservations();
}
