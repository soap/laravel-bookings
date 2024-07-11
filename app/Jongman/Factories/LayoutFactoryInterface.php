<?php

namespace App\Jongman\Factories;

interface LayoutFactoryInterface
{
    /**
     * @return ScheduleLayoutInterface
     */
    public function createLayout();

    /**
     * @param IScheduleRepository $repository
     * @param int $scheduleId
     * @return IScheduleLayout
     */
    //public function CreateCustomLayout(IScheduleRepository $repository, $scheduleId);
}