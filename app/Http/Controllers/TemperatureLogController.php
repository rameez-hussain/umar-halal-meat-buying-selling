<?php

namespace App\Http\Controllers;

use App\Http\Requests\TemperatureLogCreate;
use App\Models\TemperatureLog;
use Illuminate\Http\Request;

class TemperatureLogController extends Controller
{
    public function index(Request $request)
    {
        $year = $request->input('year', now()->year);
        $month = $request->input('month', now()->format('m'));

        $temperatureLogs = TemperatureLog::query()
            ->whereYear('created_at', $year)
            ->whereMonth('created_at', $month)
            ->orderBy('created_at')
            ->get();

        $availableYears = TemperatureLog::selectRaw('YEAR(created_at) as year')
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year');

        return view('temperature-log.index', [
            'temperatureLogs' => $temperatureLogs,
            'selectedYear' => $year,
            'selectedMonth' => $month,
            'availableYears' => $availableYears,
        ]);
    }

    public function create()
    {
        return view('temperature-log.create');
    }

    public function save(TemperatureLogCreate $request)
    {
        $temperatureLog = $request->validated();

        TemperatureLog::query()->createOrFirst([
            'temperature' => number_format(floatval($temperatureLog['temperature']), 2, '.', ''),
            'unit'        => $temperatureLog['unit'],
            'done_by'     => $temperatureLog['done_by'],
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        return redirect()->route('temperatureLogs.index');
    }
}