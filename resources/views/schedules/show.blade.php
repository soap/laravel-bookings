<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ $schedule->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">
                <div class="w-full my-2 px-5">
                    <div class="w-full text-center">{{ $schedule->name }}</div>
                    <div class="w-full text-center">{{ $scheduleDates->getBegin()->format('d/m/Y') }} - {{ $scheduleDates->getEnd()->format('d/m/Y') }}</div>
                    @foreach($scheduleDates->dates() as $date)
                    <table class="w-full mx-auto table-auto reservations border border-black-200 border-spacing-2 p-2">
                        <thead>
                            @if($date->isSameDate($today))
                            <tr class="today bg-orange-200">
                            @else
                            <tr>    
                            @endif
                                <td class="date border border-dark-500">{{ $date->format('d/m/Y') }}</td>
                                @foreach ($dailyLayout->getPeriods($date, true) as $period)
                                    <td class="reslabel" colspan="{{ $period->span() }}">{{ $period->label($date)}}</td>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($resources as $resource)
                            <tr class="slots">
                                <td class="resourcename border border-dark-500">
                                    {{ $resource->name }}
                                </td>
                                @foreach($dailyLayout->getPeriods($date, false) as $slot)
                                    @if($slot->isReservable())
                                        <td span="{{ $slot->span() }}" class="reservable slot border border-dark-500 bg-green-50">
                                            &nbsp;
                                        </td>
                                    @else
                                        <td span="{{ $slot->span() }}" class="unreservable slot border border-dark-500 bg-slate-400">
                                            &nbsp;
                                        </td>
                                    @endif
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endforeach
                </div>
                <div class="m-4 flex flex-auto justify-between">
                    <div>
                        <a href="{{ route('schedules.show', [$schedule->id, $previousDate->format('Y-m-d')]) }}"><x-antdesign-left-circle-o class="w-6 h-6 text-gray-500"/></a>
                    </div>
                    <div>
                        <a href="{{ route('schedules.show', [$schedule->id, $nextDate->format('Y-m-d')]) }}"><x-antdesign-right-circle-o class="w-6 h-6 text-gray-500"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
