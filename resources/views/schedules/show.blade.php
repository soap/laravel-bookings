<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ $schedule->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">
                <div class="my-5">
                    
                    @foreach($scheduleDates->dates() as $date)
                    <table class="reservations">
                        <thead>
                            @if($date->isSameDay($today))
                            <tr class="today">
                            @else
                            <tr>    
                            @endif
                                <td class="date">{{ $date->format('d/m/Y') }}</td>
                                @foreach ($dailyLayout->getPeriods($date, true) as $period)
                                    <td class="reslabel" colspan="{{ $period->span() }}">{{ $period->label($date)}}</td>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
