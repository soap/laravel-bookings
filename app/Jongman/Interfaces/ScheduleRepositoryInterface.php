<?php

namespace App\Jongman\Interfaces;

interface ScheduleRepositoryInterface
{
    public function getAll();

    public function loadById($scheduleId);

    public function getLayout($scheduleId, LayoutFactoryInterface $layoutFactory);

    //public function AddScheduleLayout($scheduleId, LayoutCreationInterfaceInterface $layout);
}
