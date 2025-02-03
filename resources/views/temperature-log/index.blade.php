<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Temperature Logs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="flex justify-end mb-4">
                <form method="GET" action="{{ route('temperatureLogs.index') }}" class="flex items-center space-x-2">
                    <select name="year" class="border rounded p-2">
                        @foreach($availableYears as $year)
                            <option value="{{ $year }}" {{ $year == $selectedYear ? 'selected' : '' }}>
                                {{ $year }}
                            </option>
                        @endforeach
                    </select>

                    <select name="month" class="border rounded p-2">
                        @foreach([
                            '01' => 'January', '02' => 'February', '03' => 'March',
                            '04' => 'April', '05' => 'May', '06' => 'June',
                            '07' => 'July', '08' => 'August', '09' => 'September',
                            '10' => 'October', '11' => 'November', '12' => 'December'
                        ] as $num => $name)
                            <option value="{{ $num }}" {{ $num == $selectedMonth ? 'selected' : '' }}>
                                {{ $name }}
                            </option>
                        @endforeach
                    </select>

                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                        Filter
                    </button>
                </form>
                <a href="{{ route('temperatureLogs.create') }}" class="ml-2 px-4 py-2 rounded bg-blue-200 cursor-pointer">Create</a>
            </div>

            <div class="relative overflow-x-auto mt-4">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Date</th>
                            <th scope="col" class="px-6 py-3">Temperature</th>
                            <th scope="col" class="px-6 py-3">Unit</th>
                            <th scope="col" class="px-6 py-3">Done By</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($temperatureLogs as $temperatureLog)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $temperatureLog->created_at->toDateTimeString() }}
                                </th>
                                <td class="px-6 py-4">{{ number_format($temperatureLog->temperature, 2) }}</td>
                                <td class="px-6 py-4">{{ $temperatureLog->unit }}</td>
                                <td class="px-6 py-4">{{ $temperatureLog->done_by }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4">No temperature record found for this month.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
