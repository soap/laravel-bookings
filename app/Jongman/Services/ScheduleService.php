<?php

namespace App\Jongman\Services;

use App\Jongman\Factories\DailyLayoutFactory;
use App\Jongman\Interfaces\LayoutFactoryInterface;
use App\Jongman\Services\ResourceService;
use App\Repositories\ScheduleRepository;

class ScheduleService 
{

    public function __construct(
        private ScheduleRepository $scheduleRepository,
        private ResourceService $resourceService,
        private DailyLayoutFactory $dailyLayoutFactory
    ){

    }

    public function getLayout($scheduleId, LayoutFactoryInterface $layoutFactory)
    {
        return $this->scheduleRepository->getLayout($scheduleId, $layoutFactory);
    }

    public function getDailyLayout($scheduleId, LayoutFactoryInterface $layoutFactory, $reservationListing)
    {
        return $this->dailyLayoutFactory->create($reservationListing, $this->getLayout($scheduleId, $layoutFactory));
    }

    public function getSchedule($scheduleId)
    {
        return $this->scheduleRepository->loadById($scheduleId);
    }
}
