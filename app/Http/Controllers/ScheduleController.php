<?php

namespace App\Http\Controllers;

use App\Jongman\Application\Schedule\EmptyReservationListing;
use App\Jongman\Common\Date;
use App\Jongman\Common\DateRange;
use App\Jongman\Factories\ScheduleLayoutFactory;
use App\Jongman\Services\ReservationService;
use App\Jongman\Services\ResourceService;
use App\Jongman\Services\ScheduleService;
use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function __construct(
        private ScheduleService $scheduleService,
        private ResourceService $resourceService,
        private ReservationService $reservationService
        ) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Schedule $schedule, $date = null)
    {
        $targetTimezone = auth()->user()->timezone;

        $selectedDate = $date ? Date::parse($date) : Date::now();
        $selectedDate->timezone = $targetTimezone;
        $weekStartDate = $selectedDate->copy()->startOfWeek($schedule->weekday_start);
        $weekEndDate = $weekStartDate->copy()->addDays($schedule->visible_days - 1);

        $activeScheduleId = $schedule->id;

        //$resources = $this->resourceService->GetScheduleResources($activeScheduleId, $showInaccessibleResources, $user, $filter);
        $rids = $schedule->resources()->pluck('id')->toArray();
        $resources = $schedule->resources;

        //$scheduleLayout = $this->scheduleService->getLayout($schedule->id);
        //$dateLayout = $scheduleLayout->getLayout(Date::parse($weekStartDate));

        $scheduleDates = new DateRange($weekStartDate, $weekEndDate, $targetTimezone);
        ray($scheduleDates);
        $reservationListing = new EmptyReservationListing();
    
        $dailyLayout = $this->scheduleService->getDailyLayout($activeScheduleId, new ScheduleLayoutFactory($targetTimezone), $reservationListing);

        $today = Date::now($targetTimezone);
        
        return view('schedules.show', compact('schedule', 'scheduleDates', 'today', 'dailyLayout', 'resources'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}
