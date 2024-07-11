<?php

namespace App\Jongman\Domain;

class Schedule
{
    public function fromModel($model) 
    {
        $schedule = new Schedule(
            $model->id,
            $model->name,
            $model->is_default,
            $model->weekday_start,
            $model->visible_days,
            $model->timezone,
            $model->schedule_layout_id
        );
        /*
        $schedule->WithSubscription($row[ColumnNames::ALLOW_CALENDAR_SUBSCRIPTION]);
        $schedule->WithPublicId($row[ColumnNames::PUBLIC_ID]);
        $schedule->SetAdminGroupId($row[ColumnNames::SCHEDULE_ADMIN_GROUP_ID]);
        $schedule->SetAvailability(Date::FromDatabase($row[ColumnNames::SCHEDULE_AVAILABLE_START_DATE]), Date::FromDatabase($row[ColumnNames::SCHEDULE_AVAILABLE_END_DATE]));
        $schedule->SetDefaultStyle($row[ColumnNames::SCHEDULE_DEFAULT_STYLE]);
        if (in_array(ColumnNames::LAYOUT_TYPE, $row)) $schedule->SetLayoutType($row[ColumnNames::LAYOUT_TYPE]);
        $schedule->SetTotalConcurrentReservations($row[ColumnNames::TOTAL_CONCURRENT_RESERVATIONS]);
        $schedule->SetMaxResourcesPerReservation($row[ColumnNames::MAX_RESOURCES_PER_RESERVATION]);
        */
        return $schedule;
    }
}
