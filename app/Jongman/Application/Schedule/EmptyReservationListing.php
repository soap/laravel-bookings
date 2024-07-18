<?php

namespace App\Jongman\Application\Schedule;

use App\Jongman\Common\Date;
use App\Jongman\Interfaces\ReservationListingInterface;
use Countable;

class EmptyReservationListing implements Countable, ReservationListingInterface
{
    /**
     * {@inheritDoc}
     */
    public function count(): int
    {
        return 0;
    }

    /**
     * {@inheritDoc}
     */
    public function reservations()
    {
        return [];
    }

    /**
     * {@inheritDoc}
     */
    public function onDate($date)
    {
        return new EmptyReservationListing();
    }

    /**
     * {@inheritDoc}
     */
    public function forResource($resourceId)
    {
        return new EmptyReservationListing();
    }

    /**
     * {@inheritDoc}
     */
    public function onDateForResource(Date $date, $resourceId)
    {
        return new EmptyReservationListing();
    }
}
