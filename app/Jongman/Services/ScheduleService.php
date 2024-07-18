<?php

namespace App\Jongman\Services;

use App\Jongman\Application\User\User;
use App\Jongman\Factories\DailyLayoutFactory;
use App\Jongman\Interfaces\LayoutFactoryInterface;
use App\Jongman\Interfaces\ScheduleServiceInterface;
use App\Repositories\ScheduleRepository;

class ScheduleService implements ScheduleServiceInterface
{
    public function __construct(
        private ScheduleRepository $scheduleRepository,
        private ResourceService $resourceService,
        private DailyLayoutFactory $dailyLayoutFactory
    ) {}

    public function getAll($includeInaccessible, User $user)
    {
        $schedules = $this->scheduleRepository->getAll();
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
