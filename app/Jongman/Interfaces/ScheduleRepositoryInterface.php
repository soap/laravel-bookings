<?php

namespace App\Jongman\Interfaces;

interface ScheduleRepositoryInterface
{
    public function all();

    public function loadById($scheduleId);
}
