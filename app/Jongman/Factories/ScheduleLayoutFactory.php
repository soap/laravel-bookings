<?php

namespace App\Jongman\Factories;

use App\Jongman\Domain\ScheduleLayout;
use App\Jongman\Interfaces\LayoutFactoryInterface;

class ScheduleLayoutFactory implements LayoutFactoryInterface
{
    public function __construct(private $targetTimezone = null) {}

    public function createLayout()
    {
        return new ScheduleLayout($this->targetTimezone);
    }

    public function createCustomLayout() {}
}
