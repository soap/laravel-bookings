<?php

namespace App\Jongman\Interfaces;

interface ResourceReservationListingInterface
{
    public function count(): int;

    /**
     * @return array|ReservationListItem[]
     */
    public function reservations();
}
