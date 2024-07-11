<?php

namespace App\Providers;

use App\Jongman\Factories\ScheduleLayoutFactory;
use App\Jongman\Interfaces\LayoutFactoryInterface;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class JongmanServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        app()->bind(LayoutFactoryInterface::class, ScheduleLayoutFactory::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Carbon::macro('dateEquals', function ($date) {
            return $this->isSameDay($date);
        });

        Carbon::macro('getTime', function () {
            return new Time($this->hour, $this->minute, $this->second, $this->timezone);
        });

        Carbon::macro('compare', function (Carbon $date) {
            if ($this->gt($date)) {
                return 1;
            }

            if ($this->lt($date)) {
                return -1;
            }

            return 0;
        });
    }
}
